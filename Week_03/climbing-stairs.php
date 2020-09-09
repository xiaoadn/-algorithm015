<?php 
class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function climbStairs($n) {
        
        if ($n <1) {
            return 0;
        }

        // 结束条件
        if ($n <= 2) {
            return $n;
        }

        // 当前业务
        // 跳到下次递归
        $rst = $this->climbStairs($n-1) + $this->climbStairs($n-2);

        // 清理状态

        return $rst;
    }
}

$solution = new Solution();
$rst = $solution->climbStairs(5);
var_dump($rst);

// 20200909