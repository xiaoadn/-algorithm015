<?php

class Solution
{
    /**
     * 单词接龙 II
     * 考察深度优先广度优先
     * @param String $beginWord
     * @param String $endWord
     * @param String[] $wordList
     * @return String[][]
     */
    function findLadders($beginWord, $endWord, $wordList)
    {
        $results = [];
        $wordHash = [];
        $findEndW = false;
        foreach ($wordList as $w) {
            if ($w == $endWord) $findEndW = true;
            $originw = $w;
            for ($i = 0; $i < strlen($w); $i++) {
                $w[$i] = "?";
                $wordHash[$w][] = $originw;
                $w = $originw;
            }
        }
        if (!$findEndW) return [];
        $q = [[$beginWord]];
        $used = [];
        while (count($q) > 0) {
            $nq = [];
            $curused = $used;
            $curWordHash = $wordHash;
            $finded = false;
            foreach ($q as $qinfo) {
                $originw = $w = end($qinfo);
                for ($i = 0; $i < strlen($w); $i++) {
                    $w[$i] = "?";
                    foreach ($curWordHash[$w] as $otherw) {
                        if ($curused[$otherw] || $otherw == $originw) {
                            continue;
                        }
                        $used[$otherw] = true;
                        $cp = $qinfo;
                        $cp[] = $otherw;
                        if ($otherw == $endWord) {
                            $finded = true;
                            $results[] = $cp;
                        } else {
                            $nq[] = $cp;
                        }
                    }
                    $wordHash[$w] = [];
                    $w = $originw;
                }
            }
            if ($finded) break;
            $q = $nq;
        }
        return $results;
    }
}

// 2020-09-19 leetcode 中文站