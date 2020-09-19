<?php

class Solution {

    /**
     * 跳跃游戏
     * 考察贪心算法
     * @param Integer[] $nums
     * @return Boolean
     */
    function canJump($nums) {
        if (!$nums) {
            return false;
        }

        $lastPosition = count($nums) - 1;
        for($i = count($nums) - 1; $i >= 0; $i--) {
            if ($nums[$i] + $i >= $lastPosition) {
                $lastPosition = $i;
            }
        }

        return $lastPosition == 0;
    }
}

// 2020-09-19 leetcode 中文