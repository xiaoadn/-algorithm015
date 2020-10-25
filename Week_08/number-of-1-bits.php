<?php

class Solution {
    /**
     * 考察：位运算
     * @param Integer $n
     * @return Integer
     */
    function hammingWeight($n) {
        $bits = 0;
        $mask = 1;
        for ($i = 0; $i < 32; $i ++) {
            if (($n & $mask) != 0) {
                $bits ++;
            }
            $mask <<= 1;
        }

        return $bits;
    }
}

$solution = new Solution();
echo $solution->hammingWeight(15) . "\n";

// 2020-10-24 leetcode 中文网
