<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Section;
use App\Models\Article;
use App\Models\Layout;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use App\Services\AboveFoldArticlesService;
use App;
use App\Services\GetTodaysForecastService;

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

        $languages = [];
        if ($currentUser) {
            $languages = $currentUser->reads_languages;
        } else if ($locale == 'da') {
            $languages = ['da', 'en'];
        } else {
            $languages = ['en'];
        }

        $forecast = GetTodaysForecastService::forCity('Copenhagen');

        $aboveFoldArticles = AboveFoldArticlesService::forSectionAndLanguages($section, $languages);

        $sections = Section::where('is_active', true)
            ->where('language_code', $locale)
            ->orderBy('position', 'asc')
            ->get();

        $activeSection = $sections->filter(function ($candidate) use ($section) {
            return $section == $candidate->uri;
        })->first();

        return view('section', [
            'temp' => $forecast['current'],
            'tempMin' => $forecast['min'],
            'tempMax' => $forecast['max'],
            'icon' => $forecast['icon'],
            'aboveFoldArticles' => $aboveFoldArticles,
            'currentUser' => $currentUser,
            'sections' => $sections,
            'activeSection' => $activeSection
        ]);
    }
}
