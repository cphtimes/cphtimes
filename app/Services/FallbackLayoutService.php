<?php

namespace App\Services;

use App\Models\Article;

class FallbackLayoutService
{
    public static function forFrontpage()
    {
        return [
            [
                "type" => "section",
                "data" => [
                    "title" => "Daily Digest",
                    "text" =>
                        "Get an overview of what's happening around the world.",
                    "sql" => null,
                ],
            ],
            [
                "type" => "block",
                "data" => [
                    "text_position" => "end",
                    "sql" => Article::where(
                        "section_uri",
                        "targeted-indviduals"
                    )->toSqlWithBindings(),
                ],
            ],
            [
                "type" => "fullbleed",
                "data" => [
                    "has_img_overlay" => true,
                    "text_position" => "start",
                    "sql" => Article::where(
                        "section_uri",
                        "mind-control"
                    )->toSqlWithBindings(),
                ],
            ],
            [
                "type" => "section",
                "data" => [
                    "title" => "New Paradigm",
                    "text" => "I'm a human becoming, help me to become.",
                    "sql" => Article::where(
                        "section_uri",
                        "messages"
                    )->toSqlWithBindings(),
                ],
            ],
        ];
    }

    public static function forSection($section_uri)
    {
        return [];
    }
}
