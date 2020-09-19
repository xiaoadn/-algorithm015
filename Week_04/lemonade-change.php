 <?php 

class Solution {

    /**
     * 柠檬水找零
     * 考察贪心算法
     * @param Integer[] $bills
     * @return Boolean
     */
    function lemonadeChange($bills) {
        $five = 0;
        $ten = 0;
        $len = count($bills);
        for($i = 0; $i < $len; $i ++) {
            if ($bills[$i] === 5) {
                $five ++;
            } else if($bills[$i] === 10) {
                if ($five == 0) {
                    return false;
                };
                $five --;
                $ten++;
            } else if($bills[$i] == 20) {
                if($ten > 0 && $five > 0) {
                    $ten --;
                    $five --;
                } else if($five >=3) {
                    $five -= 3;
                } else {
                    return false;
                }
            }
        }
        return true;
    }
}

// 2020-09-19 leetcode 中文
