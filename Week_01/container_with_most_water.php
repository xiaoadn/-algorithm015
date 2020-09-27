<?php
class Solution {

    /**
     * @param Integer[] $height
     * @return Integer
     */
    function maxArea($height)
    {
        $max = 0;
        $count = count($height);
        if ($count) {
            // 枚举所有可能
            for($i = 0; $i < $count; $i++) {
                for($j = $i+1; $j < $count; $j++) {
                    // 当前值
                    $curArea = min($height[$i], $height[$j]) * ($j - $i);
                    // 比较大小
                    $max = max($max, $curArea);
                }
            }
        }

        return $max;
    }

    /**
     * @param Integer[] $height
     * @return Integer
     */
    function maxArea2($height)
    {
        $max = 0;
        
        $count = count($height);
        if ($count > 0) {
            for ($i = 0, $j = $count - 1 ; $i < $j;) {
                // 计算最小高度
                $minHeight = ($height[$i] < $height[$j]) ? $height[$i ++] : $height[$j --];
                // 计算面积
                $area = ($j - $i + 1) * $minHeight;
                // 比较大小
                $max = max($area, $max);
            }
        }

        return $max;
    }
}

$soluction = new Solution();
$testData = [1,8,6,2,5,4,8,3,7];
$rst = $soluction->maxArea($testData);
echo $rst . "\n";

$rst1 = $soluction->maxArea2($testData);
echo $rst1 . "\n";

// 2020-09-04 第一遍，leecode中文官方默认，PHP
// 2020-09-27 第二遍，leetcode 中文