<?php
class Solution {

    /**
     * @param Float $x
     * @param Integer $n
     * @return Float
     */
    function myPow($x, $n) {
        if ($x == 0) return 0;
        if ($n < 0) {
            $x = 1 / $x;
            $n = -$n; 
        }

        return $this->helper($x, $n);
    }

    function helper($x, $n) {
        if ($n == 0) return 1;
        if ($n == 1) return $x;

        $subrst = $this->helper($x, $n / 2);
        if ($n%2 == 1) {
            $rst = $subrst * $subrst * $x;
        } else {
            $rst = $subrst * $subrst;
        }

        return $rst;
    }
}

// 2020-09-13 leetcode 中文