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
     * @return Integer[]
     */
    public $res = [];
    function inorderTraversal($root) {
        if ($root) {
        $this->inorderTraversal($root->left);
        array_push($this->res, $root->val);
        $this->inorderTraversal($root->right);
        }
        return $this->res;
    }
}

$solution = new Solution();


// 2020-09-06 
// 2020-09-27 leetcode 中文