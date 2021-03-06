<?php
/**
 * Created by PhpStorm.
 * User: autofelix
 * Date: 2020/7/3
 * Time: 11:08
 * Email: jiangliangscau@163.com
 * Desc: 丑数，质因数2,3,5.
 */

class Solution
{
    /**
     * @param $num
     * @return bool
     */
    public static function isUgly($num) {
        if($num < 1) return false;

        while ($num % 5 == 0) $num /= 5;
        while ($num % 3 == 0) $num /= 3;
        while ($num % 2 == 0) $num /= 2;

        return $num == 1;
    }
}

echo Solution::isUgly(10);