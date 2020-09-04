<?php
class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function climbStairs($n) {
        if ($n <= 2) return $n;
        
        $a = 1;
        $b = 2;
        for($i = 3; $i <= $n; $i++) {
            $c = $a + $b;
            $a = $b;
            $b = $c;
        }

        return $c;
    }
}

$solution = new Solution();
$rst = $solution->climbStairs(5);
echo $rst . "\n";

// // 2020-09-04 第一遍