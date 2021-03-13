<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
// use App\Models\User;

class ArticleController extends Controller
{

    /**
     * Show the Homepage
     * @return \Illuminate\View\View
     */
    public function show($year, $month, $day, $topic, $title)
    {
      return view('article', [
        'year' => $year,
        'month' => $month,
        'day' => $day,
        'topic' => $topic,
        'title' => $title
      ]);
    }
}
