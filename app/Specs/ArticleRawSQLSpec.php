<?php

namespace App\Specs;

use PHPSQLParser\PHPSQLParser;

class ArticleRawSQLSpec
{
    public static function isSatisfiedBy($sql)
    {
        $parser = new PHPSQLParser();
        $parsed = $parser->parse($sql);

        if (array_key_exists("SELECT", $parsed) == false) {
            return false;
        }

        if (array_key_exists("FROM", $parsed) == false) {
            return false;
        }

        if (array_key_exists("WHERE", $parsed) == false) {
            return false;
        }

        $from = $parsed["FROM"][0];

        if (
            $from["expr_type"] != "table" ||
            $from["no_quotes"]["parts"][0] != "article"
        ) {
            return false;
        }

        return true;
    }
}
