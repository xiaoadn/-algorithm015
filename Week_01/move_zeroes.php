<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return NULL
     */
    function moveZeroes(&$nums) {
        if (!$nums) {
            return ;
        }

        $count = count($nums);
        $j = 0;
        for ($i = 0; $i < $count; $i ++ ) {
            if ($nums[$i] != 0) {
                $tmp = $nums[$i];
                $nums[$i] = $nums[$j];
                $nums[$j++] = $tmp;
            }
        }


    }
}

$solution = new Solution();
$nums = [9,1,0,3,12,23,0,15];
$solution->moveZeroes($nums);
echo print_r($nums, 1). "\n";

// 2020-08-29 leecode中文官方默认，PHP
// 2020-09-27 leetcode 中文