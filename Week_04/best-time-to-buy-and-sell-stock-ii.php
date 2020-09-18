<?php
class Solution {

    /**
     * 股票最佳卖出时间，
     * 考察贪心算法
     * 
     * @param Integer[] $prices
     * @return Integer
     */
    function maxProfit($prices) {
        $len = count($prices);
        $income = 0;
        for($i = 0; $i < $len; $i++) {
            if (isset($prices[$i - 1]) && $prices[$i] > $prices[$i - 1]) {
                $income += $prices[$i] - $prices[$i - 1];
            }
        }

        return $income;
    }
}

// 2020-09-17 leetcode 中文