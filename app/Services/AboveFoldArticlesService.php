<?php

namespace App\Services;

use App\Models\Layout;
use App\Models\Article;

class AboveFoldArticlesService
{
    static public function forSectionAndLanguages($section_uri, $languages)
    {
        $totalCount = $section_uri ? 5 : 3;

        $aboveFoldArticles = collect();

        $layout = Layout::orderBy('position', 'asc')
            ->where('section_uri', $section_uri != null ? $section_uri : null)
            ->limit($totalCount)
            ->get();

        foreach ($layout as $item) {
            $topArticle = $item->article->whereIn('in_language', $languages)->first();

            if ($topArticle == null) {
                continue;
            }
            $aboveFoldArticles->push($topArticle);
        }

        $leftCount = $aboveFoldArticles->count() < $totalCount ? $totalCount - $aboveFoldArticles->count() : 0;

        if ($aboveFoldArticles->count() < $totalCount) {
            $fillArticles = Article::orderBy('created_at', 'desc')
                ->whereNotIn('id', $aboveFoldArticles->map(function ($article) {
                    return $article->id;
                }));
            if ($section_uri) {
                $fillArticles = $fillArticles->where('section_uri', $section_uri);
            }

            $fillArticles = $fillArticles->whereIn('in_language', $languages)
                ->offset(0)
                ->limit($leftCount)
                ->get();

            $aboveFoldArticles = $aboveFoldArticles->concat($fillArticles);
        }

        return $aboveFoldArticles;
    }
}
