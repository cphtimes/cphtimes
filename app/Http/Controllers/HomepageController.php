<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
// use App\Models\User;
use Illuminate\Support\Facades\DB;
use Kreait\Firebase\Auth\CreateSessionCookie\FailedToCreateSessionCookie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cookie;
use App\Models\User;
use App\Models\Section;
use Illuminate\Support\Facades\Auth;

use Session;
use Stripe;
use App;
use App\Models\Article;
use App\Models\Layout;

class HomepageController extends Controller
{

    private function getTodaysForecast($city)
    {
        $appid = "f25a9e5c357bd30c2210cecbff7d24c9";
        $units = "metric";
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => sprintf("http://api.openweathermap.org/data/2.5/weather?q=%s&appid=%s&units=%s", $city, $appid, $units),
            CURLOPT_URL => "http://api.openweathermap.org/data/2.5/weather?q=Copenhagen&appid=f25a9e5c357bd30c2210cecbff7d24c9&units=metric",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_POSTFIELDS => "",
            CURLOPT_HTTPHEADER => array(
                "Postman-Token: d8b563c9-d6fd-4681-abd1-cb00a73f8f4f",
                "cache-control: no-cache"
            ),
        ));
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) {
            return [0, 0, 0];
        } else {
            $json = json_decode($response);
            $temp = $json->main->temp;
            $weather = $json->weather[0];
            $icon = $weather->icon;
            $tempMin = $json->main->temp_min;
            $tempMax = $json->main->temp_max;
            return [$tempMin, $temp, $tempMax, $icon];
        }
    }

    /*
    private function getLatestUpdates() {
      $sourceURL = "http://www.dr.dk/nyheder/service/feeds/allenyheder";
      $content = file_get_contents($sourceURL);
      $xmlFeed = new \SimpleXmlElement($content);
      $latestUpdates = array();
      foreach($xmlFeed->channel->item as $entry) {
        $title = $entry->title;
        $topic = $entry->{"DR:ChannelName"};
        $date = $entry->pubDate;
        echo $topic;
        array_push($latestUpdates, [
          'title' => $title,
          'topic' => $topic,
          'date' => $date
        ]);
      }
      return $latestUpdates;
    }
    */

    public function signIn(Request $request)
    {
        $auth = app('firebase.auth');
        $email = $request->email;
        $clearTextPassword = $request->password;
        $signInResult = $auth->signInWithEmailAndPassword($email, $clearTextPassword);
        $idToken = $signInResult->idToken();
        $aWeekInMinutes = 10080;
        Cookie::queue('session', $idToken, $aWeekInMinutes);
        return back()->withInput();
    }

    public function signOut()
    {
        Cookie::queue(Cookie::forget('session'));
        return back()->withInput();
    }


    public function getUserWithIdToken($idToken)
    {
        if ($idToken == null) {
            return null;
        }
        $auth = app('firebase.auth');
        try {
            $verifiedIdToken = $auth->verifyIdToken($idToken, true);
            $uid = $verifiedIdToken->claims()->get('sub');
            $user = $auth->getUser($uid);
            return $user;
        } catch (InvalidToken $e) {
            echo 'The token is invalid: ' . $e->getMessage();
        } catch (\InvalidArgumentException $e) {
            echo 'The token could not be parsed: ' . $e->getMessage();
        }
        return null;
    }

    public function upgradeToPremium()
    {
        // \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        \Stripe\Stripe::setApiKey('sk_test_51K6ZDsJPW4uCQWrw8q0pRpYTeNT6voahaftVWZWXgCYlWrt2OUH33TNrWy8wgsCcsfeoKikgRTHpZW1VngjjIUqe00DAVOHKII');
        $priceId = 'price_1K6ZwYJPW4uCQWrwcsiGu5i0';

        $session = \Stripe\Checkout\Session::create([
            'success_url' => 'http://127.0.0.1:8000?session_id={CHECKOUT_SESSION_ID}', // success url.
            'cancel_url' => 'http://127.0.0.1:8000/', // cancel url.
            'mode' => 'subscription',
            'line_items' => [[
                'price' => $priceId,
                'quantity' => 1,
            ]],
        ]);
        return redirect($session->url);
    }

    public function webhook()
    {
        // This is your test secret API key.
        \Stripe\Stripe::setApiKey('sk_test_51K6ZDsJPW4uCQWrw8q0pRpYTeNT6voahaftVWZWXgCYlWrt2OUH33TNrWy8wgsCcsfeoKikgRTHpZW1VngjjIUqe00DAVOHKII');
        // Replace this endpoint secret with your endpoint's unique secret
        // If you are testing with the CLI, find the secret by running 'stripe listen'
        // If you are using an endpoint defined with the API or dashboard, look in your webhook settings
        // at https://dashboard.stripe.com/webhooks
        $endpoint_secret = env('STRIPE_WEBHOOK_SECRET');

        $payload = @file_get_contents('php://input');
        $event = null;

        try {
            $event = \Stripe\Event::constructFrom(
                json_decode($payload, true)
            );
        } catch (\UnexpectedValueException $e) {
            echo '⚠️  Webhook error while parsing basic request.';
            http_response_code(400);
            exit();
        }
        if ($endpoint_secret) {
            $sig_header = $_SERVER['HTTP_STRIPE_SIGNATURE'];
            try {
                $event = \Stripe\Webhook::constructEvent(
                    $payload,
                    $sig_header,
                    $endpoint_secret
                );
            } catch (\Stripe\Exception\SignatureVerificationException $e) {
                // Invalid signature
                echo '⚠️  Webhook error while validating signature.';
                http_response_code(400);
                exit();
            }
        }
        switch ($event->type) {
            case 'customer.subscription.created':
                $subscription = $event->data->object;
                $this->customerSubscriptionCreated($subscription);
                break;
            case 'payment_method.attached':
                $subscription = $event->data->object;
                $this->customerSubscriptionDeleted($subscription);
                break;
            default:
                // Unexpected event type
                error_log('Received unknown event type');
        }

        http_response_code(200);
    }

    public function customerSubscriptionCreated($subscription)
    {
    }

    public function customerSubscriptionDeleted($subscription)
    {
    }

    public function manageSubscription()
    {
        \Stripe\Stripe::setApiKey('sk_test_51K6ZDsJPW4uCQWrw8q0pRpYTeNT6voahaftVWZWXgCYlWrt2OUH33TNrWy8wgsCcsfeoKikgRTHpZW1VngjjIUqe00DAVOHKII');
        $returnURL = 'http://127.0.0.1:8000/';
        $idToken = Cookie::get('session');
        $claims = $this->getUserWithIdToken($idToken)->customClaims;
        echo $claims["stripeCustomerId"];
        $stripeCustomerId = $claims["stripeCustomerId"];
        $session = \Stripe\BillingPortal\Session::create([
            'customer' => $stripeCustomerId,
            'return_url' => $returnURL,
        ]);
        return redirect($session->url);
    }

    /**
     * Show the Homepage
     * @return \Illuminate\View\View
     */
    public function show(Request $request)
    {
        $currentUser = Auth::user();
        $locale = App::currentLocale();

        $languages = [];
        if ($currentUser) {
            $languages = $currentUser->reads_languages;
        } else if ($locale == 'da') {
            $languages = ['da', 'en'];
        } else {
            $languages = ['en'];
        }

        $darkMode = Cookie::get('dark_mode') == 'true';

        $currentWeather = $this->getTodaysForecast("Copenhagen");

        $topArticles = collect();

        $layout = Layout::orderBy('position', 'asc')
            ->where('section_uri', null)
            ->limit(3)
            ->get();

        foreach ($layout as $item) {
            $topArticle = $item->article->whereIn('in_language', $languages)->first();
            if ($topArticle == null) {
                continue;
            }
            $topArticles->push($topArticle);
        }

        $n = $topArticles->count() < 3 ? 3 - $topArticles->count() : 0;

        if ($topArticles->count() < 3) {

            $fillArticles = Article::orderBy('created_at', 'desc')
                ->whereNotIn('id', $topArticles->map(function ($article) {
                    return $article->id;
                }))
                ->whereIn('in_language', $languages)
                ->offset(0)
                ->limit($n)
                ->get();
            $topArticles = $topArticles->concat($fillArticles);
        }

        $latestUpdates = Article::orderBy('created_at', 'desc')
            ->whereIn('in_language', $languages)
            ->offset(0)
            ->limit(60)
            ->get();

        $popular = Article::where('work_status', 'published')
            ->whereIn('in_language', $languages)
            ->orderBy('comment_count', 'desc')
            ->offset(0)
            ->limit(20)
            ->get();

        $articles = Article::orderBy('created_at', 'desc')
            ->whereNotIn('id', $topArticles->map(function ($article) {
                return $article->id;
            }))
            ->whereIn('in_language', $languages)
            ->offset($n)
            ->limit(42)
            ->get();

        $sections = Section::where('is_active', true)
            ->where('language_code', $locale)
            ->orderBy('position', 'asc')
            ->get();

        $highligtedSections = [];
        foreach ($sections->slice(0, 4) as $section) {
            $sectionArticles = Article::where('section_uri', $section->uri)
                ->orderBy('created_at', 'desc')
                ->offset(0)
                ->limit(20)
                ->get();
            $highligtedSections[$section->uri] = $sectionArticles;
        }

        return view('homepage', [
            'temp' => $currentWeather[1],
            'tempMin' => $currentWeather[0],
            'tempMax' => $currentWeather[2],
            'icon' => $currentWeather[3],
            'latestUpdates' => $latestUpdates,
            'popular' => $popular,
            'topArticles' => $topArticles,
            'articles' => $articles,
            'highlightedSections' => $highligtedSections,
            'currentUser' => $currentUser,
            'darkMode' => $darkMode,
            'sections' => $sections
        ]);
    }
}
