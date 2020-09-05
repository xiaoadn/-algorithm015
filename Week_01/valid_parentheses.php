<?php

class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {
        $map = [
            '}' => '{',
            ')' => '(',
            ']' => '[',
        ];

        $len = strlen($s);
        // 奇数个字符，必然不符合
        if ($len % 2 == 1) {
            return false;
        }
        $stack = [];

        // 值为$map的key试着出栈，； 不是入栈
        for ($i = 0; $i < $len; $i ++) {
            if (isset($map[$s[$i]])) {
                if ($i == 0) { // 栈为空，false
                    return false;
                }

                $tmp = array_pop($stack); // 试着出栈
                if ($tmp != $map[$s[$i]]) { // 不匹配， false
                    return false;
                }

                // 出栈成功
            } else {
                array_push($stack, $s[$i]);
            }
        }

        // 程序完成栈不为空，false
        if (count($stack)) {
            return false;
        }

        return true;
    }
}

$solution = new Solution();
$s = "()[){}";
$rst = $solution->isValid($s);
echo $rst . "\n";

// 2020-08-29 leecode中文官方默认，PHP