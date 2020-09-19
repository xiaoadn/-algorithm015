<?php 

/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($val = 0, $left = null, $right = null) {
 *         $this->val = $val;
 *         $this->left = $left;
 *         $this->right = $right;
 *     }
 * }
 */
class Solution {

    /**
     * 在每个树行中找最大值
     * 考察深度优先广度优先
     * @param TreeNode $root
     * @return Integer[]
     */
    function largestValues($root) {
        $ans = [];
        if ($root === null) return $ans;
        $queue = new SplQueue();
        $queue->enqueue($root);
        while ($count = $queue->count()) {
            $currentLevelMax = PHP_INT_MIN;
            for ($i = 0; $i < $count; ++$i) {
                $node = $queue->dequeue();
                $currentLevelMax = max($currentLevelMax, $node->val);
                if ($node->left !== null) $queue->enqueue($node->left);
                if ($node->right !== null) $queue->enqueue($node->right);
            }
            $ans[] = $currentLevelMax;
        }

        return $ans;
    }
}

// 2020-09-19 leetcode 中文