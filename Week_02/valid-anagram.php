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

}

$solution = new Solution();

$str1 = 'anagram';
$str2 = 'nagaram';
$rst = $solution->isAnagram2($str1, $str2);
var_dump($rst);
