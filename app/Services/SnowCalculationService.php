<?php

namespace App\Services;

class SnowCalculationService
{
    public function calcMu1($alpha) {
        if ($alpha <= 30) {
            return 0.8;
        } elseif ($alpha <= 60) {
            return 0.8 * (60 - $alpha) / 30;
        } else {
            return 0;
        }
    }

    function calcSnow($mu1, $Ce, $Ct, $Sk) {
        return $mu1 * $Ce * $Ct * $Sk;
    }
}
