<?php 

class Solution {

    /**
     * 考察：位运算
     * @param Integer $n
     * @return Boolean
     */
    function isPowerOfTwo($n) {
        if ($n <= 0 ) return false;
        return ($n & (-$n) ) == $n;
    }
}

$solution = new Solution();

var_dump($solution->isPowerOfTwo(100));
echo "\n";

// 2020-10-25 leetcode 中文