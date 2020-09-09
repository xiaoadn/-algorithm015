<?php
class Solution {

    public $ansList = []; 
    /**
     * @param Integer $n
     * @return String[]
     */
    function generateParenthesis($n) {
        $this->backtrack("",0,0,$n);
        return $this->ansList;
    }
    
    function backtrack($ans,$open,$close,$n){
        if($open==$n && $close==$n){

            $this->ansList[] = $ans;
            return ;
        }

        if($open<$n) $this->backtrack($ans."(",$open+1,$close,$n);
        if($close<$open) $this->backtrack($ans.")",$open,$close+1,$n);
    }

}

$solution = new Solution();
$rst =  $solution->generateParenthesis(3);
//print_r($rst, 1);
var_dump($rst);

// 20200908做，20200909理解