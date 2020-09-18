<?php

class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
    function mySqrt1($x) {
        $left = 0;
        $right = $x / 2;
        
        $mid = 0;
        while ($left <= $right) {
            $mid = ($left + $right) / 2 + 1;
            $mid2 = $mid * $mid;
            if ($mid2 == $x) {
                break;
            } elseif ($mid2 < $x) {
                $left = $mid + 1;
            } else {
                $right = $mid -1;
            }
        }

        return $mid;
    }

    function mySqrt3($x) 
    {
        $left = 0;
        $right = $x;
        $mid = 0;
        while($left <= $right) {
            $mid = ($right - $left) / 2 + $left;
        }
    }

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


    function mySqrt2($x) 
    {
        $left = 0;
        $right = $x;
        $mid = 0;
        while($left <= $right) {
            $mid = ($right - $left) / 2 + $left;
            if (intval($mid * $mid) == $x) {
                return intval($mid);
            } elseif (intval($mid * $mid) > $x) {
                $right = $mid;
            } else {
                $left = $mid;
            }
        }

        return -1;
    }
}

$solution = new Solution();
$x = 6;
$rst = $solution->mySqrt($x);
var_dump($rst);

// 2020-09-17 leetcode 中文