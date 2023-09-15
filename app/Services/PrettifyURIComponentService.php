<?php

namespace App\Services;

class PrettifyURIComponentService {
    static public function make($str) {
        $pretty = strtolower($str);
        $pretty = str_replace(["-", "&", "$", "@", "=", ";", "/", ":", "+", ",", "?", "\\", "{", "^", "}", "%", "`", "]", "\"", ">", "[", "~", "<", "#", "|"], '', $pretty);
        $pretty = str_replace(' ', '-', $pretty);
        $pretty = str_replace('æ', 'ae', $pretty);
        $pretty = str_replace('ø', 'oe', $pretty);
        $pretty = str_replace('å', 'aa', $pretty);
        return $pretty;
    }
}