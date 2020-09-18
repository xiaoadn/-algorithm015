<?php 

/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($value) { $this->val = $value; }
 * }
 */
class Solution {
    protected

    /**
     * @param TreeNode $root
     * @return Integer[][]
     */
    function levelOrder1($root) {
        $res = [];
        if ($root === null) return $res;
        $queue = new SplQueue();
        $queue->enqueue($root);
        while($count = $queue->count()) {
            $currentLevel = [];
            for($i = 0; $i < $count; $i++) {
                $node = $queue->dequeue();
                $currentLevel[] = $node->val;
                if ($node->left !== null) $queue->enqueue($node->left);
                if ($node->right !== null) $queue->enqueue($node->right);
            }
            $res[] = $currentLevel;
        }
        return $res;
    }

    protected $res = [];
    function levelOrder($root) {
        $res = [];
        if ($root === null) return $res;
        
        $this->helper($root, 0);
        return $this->res;
    }

    function helper($root, $level) 
    {
        // terminator
        if ($root === null) return ;
        
        // process current logic
        $this->res[$level][] = $root->val;
        // drill down 
        $level ++;
        $this->helper($root->left, $level);
        $this->helper($root->right, $level);
        // reverce states if needed
        
    }
   
}

// 2020-09-16 leecode 中文 bfs
// 2020-09-16 leecode 中文 bfs dfs