<?php

class Solution {

    /**
     * 平方根
     * 考察二分法
     * @param Integer $x
     * @return Integer
     */
    function mySqrt($x) 
    {
        $left = 0;
        $right = $x;
        $mid = 0;
        $ans = -1;
        while($left <= $right) {
            $mid = ($right - $left) / 2 + $left;
            $mid = intval($mid);
            $mid2 = $mid * $mid;
            $ans = $mid;
            if ($mid2 == $x) {
                return $mid;
            } elseif ($mid2 > $x) {
                $ans = $mid -1;
                $right = $mid-1;
            } else {
                // $ans = $mid;
                $left = $mid + 1;
            }
        }

        return intval($ans);
    }

}

$solution = new Solution();
$x = 6;
$rst = $solution->mySqrt($x);
var_dump($rst);

// 2020-09-17 leetcode 中文