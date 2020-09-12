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


    protected $pre = PHP_INT_MIN;
    /**
     * @param TreeNode $root
     * @return Boolean
     */
    function isValidBST_2($root) {
        
        if ($root == null) return true;

        if (!$this->isValidBST_2($root->left)) return false;

        if ($root->val <= $this->pre) {
            return false;
        }
        $this->pre = $root->val;

        return $this->isValidBST_2($root->right);
    }
}

// 2020-09-10 leetcode中文站
// 2020-09-12 leetcode 中文站 英文站 中序