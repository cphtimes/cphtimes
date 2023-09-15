<?php

namespace App\Http\Controllers\Account;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Http;
// use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cookie;
use App\Models\Article;
use App\Models\User;
use App\Models\Section;
use App\Models\Comment;
use App\Models\UserNotifications;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Image;
use Illuminate\Support\Facades\Mail;
use App\Mail\Goodbye;
use App;

class SettingsController extends Controller
{

    public function saveBasicInfo(Request $request) {
      $basicInfo = $request->validate([
        'photo' => 'image|mimes:jpg,png,jpeg,gif|max:2048',
        'display_name' => ['required'],
        'username' => ['required'],
        'email' => ['required'],
        'country_code' => ['required'],
        'reads_languages' => ['required'],
        'bio' => []
      ]);

      $languages = explode('+', str_replace(' ', '', $basicInfo["reads_languages"]));
      $basicInfo['reads_languages'] = $languages;

      $currentUser = Auth::user();
      
      if ($request->has('photo')) {
        $photo = $request->file('photo');
        $mimeType = $photo->getClientMimeType();
        // $photo->getClientOriginalName()
        // $ext = explode('/', $mimeType)[1];

        Image::make($photo->getPathname())->resize(250, 250, function($const) {
          $const->aspectRatio();
        })->save();
        
        $storageURL = sprintf('%s/storage/v1/object/users/%s/%s', env('SUPERBASE_URL'), $currentUser->username, 'photo');
  
        $token = env('SUPERBASE_API_SECRET_KEY');
        $response = Http::withToken($token)
                        ->withBody(file_get_contents($photo), $mimeType)
                        ->put($storageURL);

        if ($response->status() >= 400) {
          $response = Http::withToken($token)
                          ->withBody(file_get_contents($photo), $mimeType)
                          ->post($storageURL);
        }
        
        if ($response->failed()) {
          return back()->withErrors(["photo" => "Could not upload photo."]);
        }
        
        $photoURL = sprintf("%s/storage/v1/object/public/users/%s/%s", env('SUPERBASE_URL'), $currentUser->username, 'photo');
        $basicInfo = array_merge(
          ['photo_url' => $photoURL],
          $basicInfo
        );
      }

      $currentUser->update($basicInfo);
      return redirect()->back();
    }

    public function savePasswordChange(Request $request) {
      $request->validate([
        'current_password' => 'required',
        'new_password' => 'required|min:8|confirmed',
      ]);
      $currentUser = Auth::user();
      $currentPasswordMatches = Hash::check($request->current_password, $currentUser->password);
      if ($currentPasswordMatches == false) {
          return back()->withErrors(["new_password" => "Current password doesn't match."]);
      }
      $currentUser->forceFill([
        'password' => Hash::make($request->new_password)
      ])->setRememberToken(Str::random(60));

      $currentUser->save();

      event(new PasswordReset($currentUser));
  
      return redirect()->back();
    }

    public function saveNotificationChange(Request $request) {
      $currentUser = Auth::user();
      $notifications = UserNotifications::firstOrNew(['user_id' => $currentUser->id]);
      $notifications->article_comment_notifications = $request->input('article_comment_notifications', 0);
      $notifications->reply_comment_notifications = $request->input('reply_comment_notifications', 0);
      $notifications->save();
      return redirect()->back();
    }

    public function deleteAccount(Request $request) {
      $request->validate([
        'confirm' => 'accepted',
      ]);
      $currentUser = Auth::user();
      $username = $currentUser->username;
      
      // put the WHOLE EmptyUserFolder problem in a job and queue it.
      $storageURL = sprintf('%s/storage/v1/object', env('SUPERBASE_URL'));
      $token = env('SUPERBASE_API_SECRET_KEY');

      $response = Http::withToken($token)
                      ->withBody(json_encode(['prefix' => $username]), 'application/json')
                      ->post($storageURL . '/list/users');
      
      $photoPath = null;
      $articlesPath = null;
      if ($response->ok()) {
        foreach (json_decode($response) as $item) {
          if ($item->metadata) {
            $photoPath = str_starts_with($item->name, 'photo') ? $item->name : null;
          } else {
            $articlesPath = $item->name == 'articles' ? $item->name : null;
          }
        }
      }

      if ($photoPath != null) {
        $response = Http::withToken($token)
                        ->withBody(json_encode(['prefixes' => [$username . '/' . $photoPath]]), 'application/json')
                        ->delete($storageURL . '/users');
      }

      if ($articlesPath != null) {
        // EmptyUserFolder::dispatch()->onQueue('emails');
      }

      if (env('APP_ENV', 'local') == 'production') {
        Mail::mailer('mailersend')
            ->to($user->email)
            ->queue(new Goodbye($currentUser));
      }

      $currentUser->delete();
      return redirect()->to('/');
    }

    /**
     * Show the Homepage
     * @return \Illuminate\View\View
    */
    public function show(Request $request)
    {

      $sort = $request->query('sort', 'newest');
      if ($request->isMethod('post')) {
        $sort = $request->sort;
        $url = $request->fullUrlWithQuery([
            'sort' => $sort
        ]);
        return redirect()->to($url);
      }

      $darkMode = Cookie::get('dark_mode') == 'true';

      $locale = App::currentLocale();

      $sections = Section::where('is_active', true)
                          ->where('language_code', $locale)
                          ->orderBy('position', 'asc')
                          ->get();
      
      $currentUser = Auth::user();
      /*
      $articles = $author->articles()->orderBy('created_at', $sort == 'newest' ? 'desc' : 'asc')
                                     ->paginate(20);
      */
      return view('account.settings', [
        'darkMode' => $darkMode,
        'sections' => $sections,
        // 'articles' => $articles,
        'currentUser' => $currentUser
      ]);
    }
}
