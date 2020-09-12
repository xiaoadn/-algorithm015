<?php
class Solution {
    protected $result = [];

    /**
     * @param Integer[] $candidates
     * @param Integer $target
     * @return Integer[][]
     */
    function combinationSum($candidates, $target) {
        if ($target <= 0) {
            return [];
        }
        sort($candidates);
        $this->combine($candidates, $target, [], 0);
        return $this->result;
    }

    function combine($nums, $target, $list, $start) {
        // recurtion terminator
        if ($target < 0) {
            return;
        }
        if ($target == 0) {
            $this->result[] = $list;
            return ;
        }
        
        for($i = $start; $i < count($nums); $i++) {
            // 修枝
            if ($target - $nums[$i] < 0) {
                break;
            }
            //echo '$i::' . $i . ',start::' . $start .  "\n";

            // process current logic
            $list[] = $nums[$i];
            // drill down
            $this->combine($nums, $target - $nums[$i], $list, $i);
            // clear
            array_pop($list);
        }
         
    }
}
$solution = new Solution();
$nums = [2,3,4,5];
$target = 7;
$rst = $solution->combinationSum($nums, $target);
var_dump($rst);

// 20200910 完成一遍，中文
// 20200912 leetcode中文,(已忘记)