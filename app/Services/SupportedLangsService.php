<?php

namespace App\Services;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class SupportedLangsService
{
    public static function get()
    {
        $currentUser = Auth::user();
        $locale = App::currentLocale();

        $languages = [];
        if ($currentUser) {
            $languages = $currentUser->reads_languages;
        } elseif ($locale == "da") {
            $languages = ["da", "en"];
        } else {
            $languages = ["en"];
        }

        return $languages;
    }
}
