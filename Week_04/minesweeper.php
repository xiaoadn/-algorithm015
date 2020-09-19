<?php

class Solution {

    /**
     * 扫雷游戏
     * 考察深度优先广度优先
     * @param String[][] $board
     * @param Integer[] $click
     * @return String[][]
     */
    function updateBoard($board, $click) {
        if ($board[$click[0]][$click[1]] == 'M') {
            $board[$click[0]][$click[1]] = 'X';
        }

        if ($board[$click[0]][$click[1]] == 'E') {
            $this->dfs($click[0], $click[1], $board);
        }

        return $board;
    }

    function dfs($x, $y, &$board) {
        //找到四周的***个数
        $mCount = 0;
        for ($i = $x - 1; $i <= $x + 1; $i++) {
            for ($j = $y - 1; $j <= $y + 1; $j++) {
                if (isset($board[$i][$j]) && $board[$i][$j] == 'M') {
                    $mCount ++;
                }
            }
        }

        if ($mCount > 0) {
            $board[$x][$y] = (string)$mCount;
            return;
        }

        if ($mCount == 0) {
            $board[$x][$y] = 'B';
            for ($i = $x - 1; $i <= $x + 1; $i++) {
                for ($j = $y - 1; $j <= $y + 1; $j++) {
                    if (isset($board[$i][$j]) && $board[$i][$j] == 'E') {
                        $this->dfs($i, $j, $board);
                    }
                }
            }
        }

        return;
    }
}

// 2020-09-19 leetcode 中文