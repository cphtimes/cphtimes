<?php

namespace App\Http\Controllers\Account\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cookie;
use Carbon\Carbon;
use App\Models\User;
use App\Models\UserRole;
use App\Models\UserNotifications;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
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
        $validated["password"] = Hash::make($validated["password"]);

        $validated = array_merge(
            ['photo_url' => sprintf("https://ui-avatars.com/api/?name=%s", $request->display_name)],
            $validated
        );
        $user = new User($validated);
        $user->save();

        $user_role = new UserRole(['user_id' => $user->id]);
        $user_role->save();
        // $user->role()->save(user_role); ?

        $notifications = new UserNotifications(['user_id' => $user->id]);
        $user->notifications()->save($notifications);

        if (env('APP_ENV', 'local') == 'production') {
            Mail::mailer('mailersend')
                ->to($user->email)
                ->queue(new Welcome($user));
        }

        $remember = true;
        Auth::login($user, $remember);
        return redirect()->route('frontpage');
    }

    /**
     * Show the Homepage
     * @return \Illuminate\View\View
     */
    public function show()
    {
        return view('account.auth.register');
    }
}
