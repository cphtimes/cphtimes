<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Section;
use App\Models\Article;
use App\Services\AboveFoldArticlesService;
use App\Services\FallbackLayoutService;
use App\Services\GetTodaysForecastService;
use App\Services\SupportedLangsService;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class FrontpageController extends Controller
{
    /**
     * Show the Homepage
     * @return \Illuminate\View\View
     */
    public function show(Request $request)
    {
        $currentUser = Auth::user();
        $locale = App::currentLocale();
        $languages = SupportedLangsService::get();

        $forecast = GetTodaysForecastService::forCity("Copenhagen");

        $aboveFoldArticles = AboveFoldArticlesService::forSectionAndLanguages(
            null,
            $languages
        );

        $latestUpdates = Article::orderBy("created_at", "desc")
            ->whereIn("in_language", $languages)
            ->offset(0)
            ->limit(60)
            ->get();

        $layout = FallbackLayoutService::forFrontpage();

        $popular = Article::where("work_status", "published")
            ->whereIn("in_language", $languages)
            ->orderBy("comment_count", "desc")
            ->offset(0)
            ->limit(20)
            ->get();

        $sections = Section::where("is_active", true)
            ->where("language_code", $locale)
            ->orderBy("position", "asc")
            ->get();

        $highligtedSections = [];
        foreach ($sections->slice(0, 4) as $section) {
            $sectionArticles = Article::where("section_uri", $section->uri)
                ->orderBy("created_at", "desc")
                ->offset(0)
                ->limit(20)
                ->get();
            $highligtedSections[$section->uri] = $sectionArticles;
        }

        return view("frontpage", [
            "temp" => $forecast["current"],
            "tempMin" => $forecast["min"],
            "tempMax" => $forecast["max"],
            "icon" => $forecast["icon"],
            "latestUpdates" => $latestUpdates,
            "popular" => $popular,
            "aboveFoldArticles" => $aboveFoldArticles,
            "highlightedSections" => $highligtedSections,
            "currentUser" => $currentUser,
            "sections" => $sections,
            "layout" => $layout,
        ]);
    }
}
