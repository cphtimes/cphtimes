<?php

namespace App\Http\Controllers\Account\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cookie;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Mail;
use App\Mail\Welcome;

class LoginController extends Controller
{

    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\View\View
     */
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $remember = $request->remember;
        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    /**
     * Logout and redirect to homepage.
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\View\View
    */
    public function logout(Request $request) 
    {
        Auth::logout();
        return redirect()->to('/'); // ->back(); -> edge case with /logout at account scenes.
    }

    /**
     * Show the Homepage
     * @return \Illuminate\View\View
    */
    public function show()
    {
      $darkMode = Cookie::get('dark_mode') == 'true';
      return view('account.auth.login', [
        'darkMode' => $darkMode
      ]);
    }
}
