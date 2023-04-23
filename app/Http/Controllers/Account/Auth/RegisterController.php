<?php

namespace App\Http\Controllers\Account\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cookie;
use Carbon\Carbon;
use App\Models\User;
use App\Models\UserNotifications;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Mail;
use App\Mail\Welcome;

class RegisterController extends Controller
{

    /**
     * Store and authenticate a new user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $validator = Validator::make($request->all(), [
        'display_name' => ['required'],
        'username' => ['required', 'unique:user'],
        'email' => ['required', 'email', 'unique:user'],
        'password' => ['required', 'min:8', 'confirmed'],
        'password_confirmation' => ['required'],
        'agreed_toc' => ['accepted'],
      ]);
      if ($validator->fails()) {
          return back()->withErrors($validator)
                       ->withInput();
      }
      $validated = $validator->safe()->except(['password_confirmation', 'agreed_toc']);
      $validated = array_merge(
        ['photo_url' => sprintf("https://ui-avatars.com/api/?name=%s", $request->display_name)],
        $validated
      );
      $user = new User($validated);
      $user->save();

      $notifications = new UserNotifications(['user_id' => $user->id]);
      $user->notifications()->save($notifications);
 
      Mail::mailer('mailersend')
          ->to($user->email)
          ->queue(new Welcome($user));
      
      $remember = true;
      Auth::login($user, $remember);
      return redirect()->to('/');
    }

    /**
     * Show the Homepage
     * @return \Illuminate\View\View
    */
    public function show()
    {
      $darkMode = Cookie::get('dark_mode') == 'true';
      return view('account.auth.register', [
        'darkMode' => $darkMode
      ]);
    }
}
