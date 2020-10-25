<?php 

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function reversePairs($nums) {
        
         // 考察归并排序
        $n = count($nums);
        return $this->mergeSort($nums, 0, $n - 1);
    }

    function mergeSort(&$nums, $lo, $hi) {

        if ($lo >= $hi) return 0;
        $mid = $lo + floor(($hi - $lo) / 2);
        $res = 0;
        $res += $this->mergeSort($nums, $lo, $mid);
        $res += $this->mergeSort($nums, $mid + 1, $hi);
        $res += $this->merge($nums, $lo, $mid, $hi);
        return $res;
    }

    // 重点逻辑
    function merge(&$nums, $lo, $mid, $hi) {

        $count = 0;
        $a = array_fill(0, $hi - $lo + 1, 0);
        $p = $lo;
        $q = $mid + 1;
        while ($p <= $mid && $q <= $hi) {
            if ((float)$nums[$p] > 2 * (float)$nums[$q]) {
                $count += $mid - $p + 1;
                $q++;
            } else {
                $p++;
            }
        }

        $p = $lo;
        $q = $mid + 1;
        $index = 0;
        while ($p <= $mid && $q <= $hi) {
            if ($nums[$p] > $nums[$q]) {
                $a[$index++]  = $nums[$q++];
            } else {
                $a[$index++]  = $nums[$p++];
            }
        }

        while ($p <= $mid) {
            $a[$index++]  = $nums[$p++];
        }

        while ($q <= $hi) {
            $a[$index++]  = $nums[$q++];
        }

        $this->arraycopy($a, $nums, $lo, $hi - $lo + 1);
        return $count;
    }

    // 模拟 java arraycopy，将 $a 复制到 $nums 的指定位置
    function arraycopy($a, &$nums, $lo, $len) {

        for ($i=0; $i < $len; $i++) { 
            $nums[$lo] = $a[$i];
            $lo++;
        }
    }
}