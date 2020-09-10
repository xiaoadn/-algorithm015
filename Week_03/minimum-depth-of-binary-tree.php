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
    function minDepth($root) {
        // terminator 
        if ($root == null) return 0;
        if ($root->left == null && $root->right == null) return 1;

        // proccess
        // drill down
        $min = PHP_INT_MAX;
        if ($root->left) {
            $min = min($this->minDepth($root->left), $min);
        }
        if ($root->right) {
            $min = min($this->minDepth($root->right), $min);
        }
        // reverse states

        return $min + 1;
    }
}

// 2020-09-10 leetcode 中文