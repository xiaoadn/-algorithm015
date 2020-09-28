<?php
class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isAnagram($s, $t) {
        return count_chars($s, 1) == count_chars($t, 1);
    }

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isAnagram2($s, $t) {
        $s = str_split($s);
        $t = str_split($t);
        sort($s);
        sort($t);
        return $s == $t;
    }

    function isAnagram3($s, $t) {
        $len = strlen($s);
        if ($len != strlen($t)) { // 长度不一样，false
           return false;
        }

        $hash = [];
        // 存入hash表
        for ($i = 0; $i < $len; $i ++) {
            $hash[$s[$i]] = ($hash[$s[$i]] ?? 0) + 1;
        }

       // 从hash中移除
        for ($i = 0; $i < $len; $i++) {
            if (isset($hash[$t[$i]]) && --$hash[$t[$i]] == 0) {
                unset($hash[$t[$i]]);
            } 
        }

        return $hash == [];
   }

}

$solution = new Solution();

$str1 = 'anagram';
$str2 = 'nagaram';
$rst = $solution->isAnagram2($str1, $str2);
var_dump($rst);

// 2020-09-27 leetcode 中文
