<?php
class Solution {

    /**
     * 幂运算
     * 考察递归
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

    function helper($x, $n)
    {
        if ($n == 0) return 1;
        if ($n == 1) return $x;

        $subRst = $this->helper($x, intval($n/2));
        if ($n % 2 == 1) {
            $rst = $subRst * $subRst * $x;
        } else {
            $rst = $subRst * $subRst;
        }

        return $rst;
    }

}

$solution = new Solution();
$rst = $solution->myPow(10, 9);
var_dump($rst);

// 2020-09-13 leetcode 中文
// 2020-09-18 