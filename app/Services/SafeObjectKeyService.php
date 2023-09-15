<?php

namespace App\Services;

class SafeObjectKeyService {
    /* 
    See:
    https://docs.aws.amazon.com/AmazonS3/latest/userguide/object-keys.html#object-key-guidelines-avoid-characters and
    https://github.com/supabase/storage-api/issues/133
    */

    static public function make($key, $hideExtension=true) {
        $safeKey = $key;

        $fragments = explode('.', $safeKey);
        if (count($fragments) >= 2 && $hideExtension == false) {
            
            $name = join("", array_slice($fragments, 0, count($fragments) - 1));
            $extension = $fragments[count($fragments) - 1];
            
            return hash('md5', $name) . '.' . $extension;
        }
        
        // [a-fA-F0-9]
        return hash('md5', $safeKey);
    }

    /*
    static public function make($key) {
        $safeKey = $key;

        $unsafeChars = [" ", "&", "$", "@", "=", ";", "/", ":", "+", ",", "?", "\\", "{", "^", "}", "%", "`", "]", "\"", ">", "[", "~", "<", "#", "|"];
        // $safeKey = str_replace($unsafeChars, "", $safeKey);

        $safeKey = preg_replace("/[^\-\_a-zA-Z0-9]+/", "", $safeKey);

        return $safeKey;
    }
    */
}