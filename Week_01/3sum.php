<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    function threeSum($nums) {
        // 长度
        $len = count($nums);
        // 结果数组
        $rst = [];
        // 特殊情况处理
        if ($len < 3) {
            return $rst;
        }
        // 排序
        sort($nums);
        
        // 遍历
        for($i = 0; $i < $len; $i ++) {
            // 第一个值非负，没有办法为零
            if ($nums[$i] > 0) {
                return $rst;
            }
            // i>0，去重
            if ($i > 0 && $nums[$i] == $nums[$i-1]) {
                continue;
            }
            
            $left = $i + 1;
            $right = $len-1;
            while ($left < $right) {
                $sum = $nums[$i] + $nums[$left] + $nums[$right];
            
                if ($sum == 0) {
                    $rst[] = [$nums[$i], $nums[$left], $nums[$right]];
                    while ($left < $right && $nums[$left] == $nums[$left + 1]) {
                        $left = $left +1;
                    }
                    while ($left < $right && $nums[$right] == $nums[$right -1]) {
                        $right = $right -1;
                    }
                    
                    $left = $left +1;
                    $right = $right -1;
                } elseif ($sum > 0) {
                    $right = $right -1;
                } else {
                    $left = $left +1;
                }
            }

        }

        return $rst;

    }
}

$solution = new Solution();
$testData = [-1,0,1,2,-1,-4];
$rst = $solution->threeSum($testData);
print_r($rst);

// // 2020-09-04 第一遍，leecode中文官方默认
// 2020-09-26 第二遍，leecode中文官方默认
// 2020-09-27 第二遍，leetcode中文官方默认