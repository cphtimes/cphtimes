<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
// use App\Models\User;
use Illuminate\Support\Facades\DB;
use Kreait\Firebase\Auth\CreateSessionCookie\FailedToCreateSessionCookie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cookie;
use App\Models\User;
use App\Models\Section;
use Illuminate\Support\Facades\Auth;
use Session;
use Stripe;
use App;
use App\Models\Article;
use App\Models\Layout;
use App\Services\AboveFoldArticlesService;
use App\Services\GetTodaysForecastService;

class HomepageController extends Controller
{

    /**
     * Show the Homepage
     * @return \Illuminate\View\View
     */
    public function show(Request $request)
    {
        $currentUser = Auth::user();
        $locale = App::currentLocale();

        $languages = [];
        if ($currentUser) {
            $languages = $currentUser->reads_languages;
        } else if ($locale == 'da') {
            $languages = ['da', 'en'];
        } else {
            $languages = ['en'];
        }

        $forecast = GetTodaysForecastService::forCity('Copenhagen');

        $aboveFoldArticles = AboveFoldArticlesService::forSectionAndLanguages(null, $languages);

        $latestUpdates = Article::orderBy('created_at', 'desc')
            ->whereIn('in_language', $languages)
            ->offset(0)
            ->limit(60)
            ->get();

        $popular = Article::where('work_status', 'published')
            ->whereIn('in_language', $languages)
            ->orderBy('comment_count', 'desc')
            ->offset(0)
            ->limit(20)
            ->get();

        $sections = Section::where('is_active', true)
            ->where('language_code', $locale)
            ->orderBy('position', 'asc')
            ->get();

        $highligtedSections = [];
        foreach ($sections->slice(0, 4) as $section) {
            $sectionArticles = Article::where('section_uri', $section->uri)
                ->orderBy('created_at', 'desc')
                ->offset(0)
                ->limit(20)
                ->get();
            $highligtedSections[$section->uri] = $sectionArticles;
        }

        return view('homepage', [
            'temp' => $forecast["current"],
            'tempMin' => $forecast["min"],
            'tempMax' => $forecast["max"],
            'icon' => $forecast["icon"],
            'latestUpdates' => $latestUpdates,
            'popular' => $popular,
            'aboveFoldArticles' => $aboveFoldArticles,
            'highlightedSections' => $highligtedSections,
            'currentUser' => $currentUser,
            'sections' => $sections
        ]);
    }
}
