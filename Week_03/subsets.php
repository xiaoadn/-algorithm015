<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    function subsets($nums) {
        if (!$nums) return [];

        $rst = [];
        $this->helper($nums, 0, [], $rst);
        return $rst;
    }

    function helper($nums, $index, $current, &$result)
    {
        // terminator
        if ($index == count($nums)) {
            $result[] = $current;
            return $result;
        }

        // prepare datas
        $this->helper($nums, $index+1, $current, $result);
        // 
        $current[] = $nums[$index];
        $this->helper($nums, $index+1, $current, $result);
    }

}

// 2020-09-13 leetcode 中文