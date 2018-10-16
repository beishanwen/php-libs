<?php
/***************************************************************************
 *
 * Copyright (c) 2018 beishanwen.com, Inc. All Rights Reserved
 *
 **************************************************************************/

/**
 * @file GcdUtils.php
 * @author strick@beishanwen.com
 * @date 2018/05/01 00:00:00
 * @brief 求最大公约数 库
 */

namespace beishanwen\phplib\math;

class GcdUtils
{
    /**
     * @brief returns greatest common divisor between two numbers tested against gmp_gcd()
     * @author strick@beishanwen.com
     * @param $a
     * @param $b
     * @return int
     */
    public static function gcd($a, $b)
    {
        if ($a == 0 || $b == 0) {
            return abs(max(abs($a), abs($b)));
        }

        $r = $a % $b;
        return ($r != 0) ? self::gcd($b, $r) : abs($b);
    }

    /**
     *
     * @brief gets greatest common divisor among an array of numbers
     * @author strick@beishanwen.com
     * @param $array
     * @param $a
     * @return int
     */
    public static function gcd_array($array, $a = 0)
    {
        $b = array_pop($array);
        return ($b === null) ? (int)$a : self::gcd_array($array, self::gcd($a, $b));
    }
}
