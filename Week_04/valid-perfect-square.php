<?php

class Solution {

    /**
     * 有效的完全平方数，如果 num 是一个完全平方数，则返回 True，否则返回 False。
     * 考察二分法
     * @param Integer $num
     * @return Boolean
     */
    function isPerfectSquare($num) {
        if ($num == 0) return false; 
        if ($num == 1) return true;
        $left = 0;
        $right = $num / 2;
        $mid = 0;
        while($left <= $right) {
            $mid = ($right - $left) / 2 + $left;
            $mid = intval($mid);
            $mid2 = $mid * $mid;
            if ($mid2 == $num) return true;
            if ($mid2 < $num) {
                $left = $mid + 1;
            } else {
                $right = $mid - 1;
            }
        }
        return false;
    }
}

$solution = new Solution();
$rst = $solution->isPerfectSquare(14);
var_dump($rst);

// 2020-09-19 leetcode 中文站
