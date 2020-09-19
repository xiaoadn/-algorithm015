<?php
class Solution {
    protected $list = [];
    /**
     * 括号生成
     * 考察深度优先广度优先
     * @param Integer $n
     * @return String[]
     */
    function generateParenthesis($n) {
        $this->helper('', 0, 0, $n);
        return $this->list;
    }

    function helper($str, $start, $close, $n)
    {
        if ($start >= $n && $close >= $n) {
            if ($start == $n && $close == $n) {
                $this->list[] = $str;
            }
            return ;
        }

        // proccess
        // drill down
        if ($start < $n) $this->helper($str . '(', $start+1, $close, $n);
        if ($close < $start) $this->helper($str . ')', $start, $close+1, $n);
        // reverse 
    }
}

// 2020-09-19 leetcode 中文