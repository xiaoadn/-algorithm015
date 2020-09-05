<?php 
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $map = [];
        $rst = [];
        for($i=0; $i < count($nums); $i++) {
            $val = $target - $nums[$i];
            //echo '数字：：' . $val . "\n";
            if (isset($map[$val])) {
                echo $map[$val] . "\n";
                return [$map[$val], $i];
            }

            //echo $i . "\n";

            $map[$nums[$i]] = $i;
        }
        return $rst;
    }
}

$solution = new Solution();
$testNums = [2, 7, 11, 15];
$target = 9;
$rst = $solution->twoSum($testNums, $target);
print_r($rst);

// 2020-09-05 leetcode中文官方