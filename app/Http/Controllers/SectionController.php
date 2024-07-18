<?php

namespace App\Http\Controllers;

use App\Models\Section;
use Illuminate\Support\Facades\Auth;
use App\Services\AboveFoldArticlesService;
use App\Services\GetTodaysForecastService;
use App\Services\SupportedLangsService;
use Illuminate\Support\Facades\App;

class SectionController extends Controller
{
    /**
     * Show the Homepage
     * @return \Illuminate\View\View
     */
    public function show($section)
    {
        $currentUser = Auth::user();
        $locale = App::currentLocale();

        $languages = SupportedLangsService::get();

        $forecast = GetTodaysForecastService::forCity("Copenhagen");

        $aboveFoldArticles = AboveFoldArticlesService::forSectionAndLanguages(
            $section,
            $languages
        );

        $sections = Section::where("is_active", true)
            ->where("language_code", $locale)
            ->orderBy("position", "asc")
            ->get();

        $activeSection = $sections
            ->filter(function ($candidate) use ($section) {
                return $section == $candidate->uri;
            })
            ->first();

        return view("section", [
            "temp" => $forecast["current"],
            "tempMin" => $forecast["min"],
            "tempMax" => $forecast["max"],
            "icon" => $forecast["icon"],
            "aboveFoldArticles" => $aboveFoldArticles,
            "currentUser" => $currentUser,
            "sections" => $sections,
            "activeSection" => $activeSection,
        ]);
    }
}
