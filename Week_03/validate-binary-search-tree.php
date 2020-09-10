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
     * @return Boolean
     */
    function isValidBST($root) {
        return $this->helper($root, null, null);
    }

    function helper($root, $min, $max) {
        if ($root == null) {
            return true;
        }

        if ($min !== null && $root->val <= $min) return false; 
        if ($max !== null && $root->val >= $max) return false;

        if (!$this->helper($root->left, $min, $root->val)) return false;
        if (!$this->helper($root->right, $root->val, $max)) return false;

        return true;
    }
}

// 2020-09-10 leecode中文站