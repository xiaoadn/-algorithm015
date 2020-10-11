<?php

// 考察：并查集 
class UF {
    // 连通分量个数
    public $count;
    // 存储一棵树
    public $parent = [];
    // 记录树的“重量”
    public $size = [];

    public function __construct($n) {
        $this->count = $n;
        for ($i = 0; $i < $n; $i++) {
            $this->parent[$i] = $i;
            $this->size[$i] = 1;
        }
    }

    public function union($p, $q) {
        $rootP = $this->find($p);
        $rootQ = $this->find($q);
        if ($rootP == $rootQ)
            return;

        // 小树接到大树下面，较平衡
        if ($this->size[$rootP] > $this->size[$rootQ]) {
            $this->parent[$rootQ] = $rootP;
            $this->size[$rootP] += $this->size[$rootQ];
        } else {
            $this->parent[$rootP] = $rootQ;
            $this->size[$rootQ] += $this->size[$rootP];
        }
        $this->count--;
    }

    public function connected($p, $q) {
        $rootP = $this->find($p);
        $rootQ = $this->find($q);
        return $rootP == $rootQ;
    }

    private function find($x) {
        while ($this->parent[$x] != $x) {
            // 进行路径压缩
            $this->parent[$x] = $this->parent[$this->parent[$x]];
            $x = $this->parent[$x];
        }
        return $x;
    }
}


class Solution {

    /**
     * @param String[][] $board
     * @return NULL
     */
    function solve(&$board) {
    	if (count($board) == 0) return;

	    $m = count($board);//行
	    $n = count($board[0]);//列
	    // 给 dummy 留一个额外位置
	    $uf = new UF($m * $n + 1);
	    $dummy = $m * $n;
	    // 将首列和末列的 O 与 dummy 连通
	    for ($i = 0; $i < $m; $i++) {
	        if ($board[$i][0] == 'O')
	            $uf->union($i * $n, $dummy);
	        if ($board[$i][$n - 1] == 'O')
	            $uf->union($i * $n + $n - 1, $dummy);
	    }
	    // 将首行和末行的 O 与 dummy 连通
	    for ($j = 0; $j < $n; $j++) {
	        if ($board[0][$j] == 'O')
	            $uf->union($j, $dummy);//因为是首行,x为0
	        if ($board[$m - 1][$j] == 'O')
	            $uf->union(($m - 1)*$n + $j, $dummy);//末行x为$m-1
    	}
    	// 方向数组 d 是上下左右搜索的常用手法
	    $d = [
	    	[1,0],
	    	[0,1],
	    	[0,-1],
	    	[-1,0],
	    ];
	    for ($i = 1; $i < $m - 1; $i++) {
	        for ($j = 1; $j < $n - 1; $j++){
	            if ($board[$i][$j] == 'O'){
	            	// 将此 O 与上下左右的 O 连通
	                for ($k = 0; $k < 4; $k++) {
	                    $x = $i + $d[$k][0];
	                    $y = $j + $d[$k][1];
	                    if ($board[$x][$y] == 'O')
	                        $uf->union($x * $n + $y, $i * $n + $j);
	                }
	            }
	        }
	    }
	    // 所有不和 dummy 连通的 O，都要被替换
	    for ($i = 1; $i < $m - 1; $i++){
	        for ($j = 1; $j < $n - 1; $j++){
	            if (!$uf->connected($dummy, $i * $n + $j))
	                $board[$i][$j] = 'X';
	        }
	    }
    }
}