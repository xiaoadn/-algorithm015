<?php 

class TreeNode
{
    public $val = null;
    public $left = null;
    public $right = null;
    function __construct($val=null)
    {
        $this->val = $val;
    }
}

class Solution {

    /**
     * @param TreeNode $root
     * @return TreeNode
     */
    function invertTree($root) {
        // resurtion terminator
        if ($root == null) {
            return $root;
        }

        // proccess current logic
        $tmp = $root->left;
        $root->left = $root->right;
        $root->right = $tmp;
        // drill down
        $this->invertTree($root->left);
        $this->invertTree($root->right);
        // clear current status 

        return $root;
    }
}

// 20200910 leetcode 中文版
// 20200912 leetcode 中文版 英文版