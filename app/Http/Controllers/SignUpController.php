<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignUpController extends Controller
{
    /**
     * Show the Homepage
     * @return \Illuminate\View\View
    */
    public function show()
    {
      return view('sign-up');
    }
}
