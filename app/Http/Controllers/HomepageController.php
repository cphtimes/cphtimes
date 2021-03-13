<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
// use App\Models\User;

class HomepageController extends Controller
{

    private function getCurrentWeather($city) {
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
        return [];
      } else {
        $json = json_decode($response);
        $temp = $json->main->temp;
        $tempMin = $json->main->temp_min;
        $tempMax = $json->main->temp_max;
        return [$tempMin, $temp, $tempMax];
      }
    }

    /**
     * Show the Homepage
     * @return \Illuminate\View\View
     */
    public function show()
    {
      $dateFormatted = "<strong>" . date("l,") . "</strong>" . "<br/>" . date("F d, Y");
      $currentWeather = $this->getCurrentWeather("Copenhagen");
      return view('homepage', [
        'dateFormatted' => $dateFormatted,
        'temp' => $currentWeather[1],
        'tempMin' => $currentWeather[0],
        'tempMax' => $currentWeather[2]
      ]);
    }
}
