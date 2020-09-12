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

    /**
     * @param TreeNode $root
     * @return Integer
     */
    function maxDepth($root) {
        if ($root === null) return 0;
        $left = $this->maxDepth($root->left);
        $right = $this->maxDepth($root->right);
        return max($left, $right) + 1;
    }
}

// 2020-09-10 leetcode中文
// 2020-09-12 leetcode 中文 英文