<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class GetTodaysForecastService
{
    static public function forCity($city)
    {
        $response = Http::get('http://api.openweathermap.org/data/2.5/weather?q=' . $city . '&appid=' . 'f25a9e5c357bd30c2210cecbff7d24c9' . '&units=' . 'metric');

        if ($response->failed()) {
            return [
                'min' => 0,
                'max' => 0,
                'current' => 0,
                'icon' => null
            ];
        }

        $json = $response->json();

        return [
            'min' => (float) $json["main"]["temp_min"],
            'max' => (float) $json["main"]["temp_max"],
            'current' => (float) $json["main"]["temp"],
            'icon' => $json["weather"][0]["icon"]
        ];
    }
}
