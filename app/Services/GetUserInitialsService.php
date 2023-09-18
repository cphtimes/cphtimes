<?php

namespace App\Services;

class GetUserInitialsService {
    static public function forName($name) {
        $fragments = explode(' ', $name);
        if (count($fragments) == 0) {
            return null;
        } else if (count($fragments) == 1) {
            $fn = $fragments[0];
            return $fn[0];
        } else {
            $fn = $fragments[0];
            $ln = $fragments[count($fragments) - 1];
            return $fn[0] . $ln[0];
        }
    }
}