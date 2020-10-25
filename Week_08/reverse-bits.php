<?php

class Solution {
    /**
     * 考察：位运算
     * @param Integer $n
     * @return Integer
     */
    function reverseBits($n) {
        $ans = 0;
        for ($i = 0; $i < 32; $i ++) {
            $ans = ($ans << 1) + ($n & 1);
            $n = $n >> 1;
        }
        return $ans;
    }
}
