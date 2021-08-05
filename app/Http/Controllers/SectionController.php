<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SectionController extends Controller
{
  private function getTodaysForecast($city) {
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
    $dateFormatted = "<strong>" . date("l,") . "</strong>" . "<br/>" . date("F d, Y");
    $currentWeather = $this->getTodaysForecast("Copenhagen");
    $topArticles = DB::table('article')
                          ->where('article_section', $section)
                          ->orderBy('date_published', 'desc')
                          ->offset(0)
                          ->limit(3)
                          ->get();

    $latestUpdates = DB::table('article')
                            ->where('article_section', $section)
                            ->orderBy('date_published', 'desc')
                            ->offset(0)
                            ->limit(20)
                            ->get();

    $articles = DB::table('article')
                        ->where('article_section', $section)
                        ->orderBy('date_published', 'desc')
                        ->offset(3)
                        ->limit(12)
                        ->get();

    $individuals = DB::table('individual')
                    ->orderBy('id', 'asc')
                    ->offset(0)
                    ->limit(20)
                    ->get();

    return view('section', [
      'dateFormatted' => $dateFormatted,
      'temp' => $currentWeather[1],
      'tempMin' => $currentWeather[0],
      'tempMax' => $currentWeather[2],
      'icon' => $currentWeather[3],
      'latestUpdates' => $latestUpdates,
      'topArticles' => $topArticles,
      'latestUpdates' => json_decode($latestUpdates, true),
      'articles' => $articles,
      'individuals' => json_decode($individuals, true)
    ]);
  }
}
