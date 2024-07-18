<?php

namespace App\Services;

use PHPSQLParser\PHPSQLParser;

class ArticleRawSQLService
{
    public static function whereRaw($sql)
    {
        $parser = new PHPSQLParser();
        $parsed = $parser->parse($sql);
        $where = $parsed["WHERE"];

        return implode(
            " ",
            array_map(function ($x) {
                return $x["base_expr"];
            }, $where)
        );
    }
}
