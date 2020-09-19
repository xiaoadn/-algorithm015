<?php 

class Solution {

    /**
     * 最小基因变化
     * 考察深度优先广度优先
     * @param String $start
     * @param String $end
     * @param String[] $bank
     * @return Integer
     */
    function minMutation($start, $end, $bank) {
        if ($start == $end) return 0;
        $bank_hash = array_flip($bank);
        $chars = ['A', 'C', 'G', 'T'];
        $visited = [];
        $queue = [$start];
        $visited[$start] = true;
        $level = 0;
        while ($queue) {
            $size = count($queue);
            while ($size--) {
                $curr = array_shift($queue);
                if ($curr == $end) return $level;
                for ($i = 0, $len = strlen($curr); $i < $len; $i++) {
                    $old = $curr[$i];
                    foreach ($chars as $char) {
                        $curr[$i] = $char;
                        if (!$visited[$curr] && isset($bank_hash[$curr])) {
                            $queue[] = $curr;
                            $visited[$curr] = true;
                        }
                    }
                    $curr[$i] = $old;
                }
            }
            $level += 1;
        }
        return -1;
    }
}

// 2020-09-19 leetcode 中文