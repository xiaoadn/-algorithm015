<?php

class Solution {

    /**
     * 分发饼干
     * 考察贪心算法
     * @param Integer[] $g
     * @param Integer[] $s
     * @return Integer
     */
    function findContentChildren($g, $s) {
        if (!$g || !$s) return 0;
        sort($g);
        sort($s);
        $gi = 0;
        $si = 0;
        while ($gi < count($g) && $si < count($s)) {
            if ($g[$gi] <= $s[$si]) {
                $gi ++;
            }
            $si ++;
        }

        return $gi;
    }
}

// 2020-09-19 leetcode 中文