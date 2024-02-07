<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Section;
use App\Models\Article;
use App\Models\Layout;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

use App;

class SectionController extends Controller
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

    /**
     * Show the Homepage
     * @return \Illuminate\View\View
     */
    public function show($section)
    {
        $darkMode = Cookie::get('dark_mode') == 'true';

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

        $currentWeather = $this->getTodaysForecast("Copenhagen");

        $topArticles = collect();

        $layout = Layout::orderBy('position', 'asc')
            ->where('section_uri', $section)
            ->limit(5)
            ->get();

        foreach ($layout as $item) {
            $topArticle = $item->article->whereIn('in_language', $languages)->first();

            if ($topArticle == null) {
                continue;
            }
            $topArticles->push($topArticle);
        }

        $n = $topArticles->count() < 5 ? 5 - $topArticles->count() : 0;

        if ($topArticles->count() < 5) {
            $fillArticles = Article::orderBy('published_at', 'desc')
                ->where('section_uri', $section)
                ->whereNotIn('id', $topArticles->map(function ($article) {
                    return $article->id;
                }))
                ->whereIn('in_language', $languages)
                ->offset(0)
                ->limit($n)
                ->get();
            $topArticles = $topArticles->concat($fillArticles);
        }

        /*
        $articles = Article::where('section_uri', $section)
            ->orderBy('published_at', 'desc')
            ->whereNotIn('id', $topArticles->map(function ($article) {
                return $article->id;
            }))
            ->whereIn('in_language', $languages)
            ->offset($n)
            ->limit(42)
            ->get();
        */

        $sections = Section::where('is_active', true)
            ->where('language_code', $locale)
            ->orderBy('position', 'asc')
            ->get();

        return view('section', [
            'darkMode' => $darkMode,
            'temp' => $currentWeather[1],
            'tempMin' => $currentWeather[0],
            'tempMax' => $currentWeather[2],
            'icon' => $currentWeather[3],
            'topArticles' => $topArticles,
            // 'articles' => $articles,
            'currentUser' => $currentUser,
            'sections' => $sections,
            'activeSection' => $section
        ]);
    }
}
