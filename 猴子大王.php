<?php
/**
 * Created by PhpStorm.
 * User: autofelix
 * Date: 2020/7/3
 * Time: 11:08
 * Email: jiangliangscau@163.com
 * Desc: 一群猴子排成一圈，按1，2，…，n依次编号。然后从第1只开始数，数到第m只,把它踢出圈，
 * 从它后面再开始数，再数到第m只，在把它踢出去…，如此不停的进行下去，直到最后只剩下一只猴子为止，
 * 那只猴子就叫做大王。要求编程模拟此过程，输入m、n, 输出最后那个大王的编号.
 */

class Solution
{
    public static function monkeyKing($n, $m) {
        $monkeys = range(1, $n);
        $i = 0;
        while ( count($monkeys) > 1 ) {
            if (($i+1) % $m == 0) {
                unset($monkeys[$i]);
            } else {
                array_push($monkeys, $monkeys[$i]);
                unset($monkeys[$i]);
            }
            $i++;
        }

        return current($monkeys);
    }
}

echo Solution::monkeyKing(100, 6);