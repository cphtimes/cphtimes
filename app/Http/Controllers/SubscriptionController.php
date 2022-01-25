<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
  /**
   * Show the Homepage
   * @return \Illuminate\View\View
  */
  public function show()
  {
    return view('subscription');
  }
}
