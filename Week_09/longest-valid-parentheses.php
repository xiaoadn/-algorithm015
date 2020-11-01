<?php
class Solution 
{

    function longestValidParentheses($s) {
        $n = strlen($s);
        if  ($n <2) return 0;
        $dp = array_fill(0, $n, 0);
        for ($i = 1; $i < $n; ++$i) {
            if ($s[$i] === '(') continue;
            $index = $i - $dp[$i - 1] - 1;
            if ($index >= 0 && $s[$index] === '(') {
                $dp[$i] = $dp[$i - 1] + 2 + $dp[$index - 1] ?? 0;
            }
        }

        return max($dp);
    }


    function longestValidParentheses2($s) {
        $n = strlen($s);
        if ($n < 2) return 0;
        $dp = array_fill(0, $n, 0);
        for ($i = 1; $i < $n; ++$i) {
            if ($s[$i] === '(') continue;
            $index = $i - $dp[$i - 1] - 1;
            if ($index >= 0 && $s[$index] === '(') {
                $dp[$i] = $dp[$i - 1] + 2 + $dp[$index - 1] ?? 0;
            }
        }

        return max($dp);
    }
}