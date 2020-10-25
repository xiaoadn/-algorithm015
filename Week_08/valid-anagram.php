<?php

class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */

    function isAnagram($s, $t) {
        if(strlen($s)!=strlen($t)) return false;
        $count =array();
        $sa = str_split ($s);
        $ta = str_split ($t);
        foreach($sa as $v){
            $count[$v]++;
        }
       
        foreach($ta as $v){
            if( $count[$v]>0){
                $count[$v]--;
            }else{
                return false;
            }
        }

        foreach($count as $v){
            if($v>0) return false;
        }
        return true;
    }
}