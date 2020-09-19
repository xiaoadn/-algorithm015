<?php

class Solution {

    /**
     * 搜索旋转排序数组
     * 考察二分法
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function search($nums, $target) {
        if(empty($nums))
            return -1;

        $len=sizeof($nums);    
        $big=false;
        $small=false;            
        for($i=0,$j=0;(!$big||!$small)&&$j<$len;$j++){  //主要是注意循环条件
            if($target==$nums[$i]){ //相等直接返回i
                return $i;
            }else if($target>$nums[$i]){//目标值大，i++，查找
                $i++;
                $big=true;                
            }else{  //目标值小，i--，反向查找
                if($i==0)
                    $i=$len-1;
                else
                    $i--;
                $small=true;                
            }
        }

        return -1;  //循环结束还没找到，返回-1
    }
}

// 2020-09-19 leetcode 中文