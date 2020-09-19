<?php 

class Solution {

    /**
     * 跳跃游戏 II
     * 考察贪心算法
     * @param Integer[] $nums
     * @return Integer
     */
    function jump($nums) {
        $myhightestPosition = 0;
        $myLoveRoperPosition = 0;
        $mustChangeTime = 0;
        for ($i = 0; $i < count($nums) - 1; $i++) {
            $myLoveRoperPosition = max($myLoveRoperPosition, $nums[$i] + $i);
            if ($i == $myhightestPosition) {
                $myhightestPosition = $myLoveRoperPosition;
                $mustChangeTime ++;
            }
        }
        return $mustChangeTime;
    }
}

// 2020-09-19 leetcode 中文