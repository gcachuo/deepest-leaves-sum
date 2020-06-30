<?php

class Solution
{
    private $depth = 0;
    private $maxDepth = 0;
    public $sum;

    /**
     * @param TreeNode $root
     * @return Integer
     */
    function deepestLeavesSum($root)
    {
        $this->sum($root);
        return $this->sum;
    }

    function sum($root)
    {
        if ($root == null) {
            return null;
        } else {
            $this->depth += 1;
            if (!$root->right && !$root->left) {
                if ($this->depth >= $this->maxDepth) {
                    $this->maxDepth = $this->depth;
                    $this->depth = 0;
                    $this->sum += $root->val;
                }
            }
            $node = $this->sum($root->left);
            if ($node == null) {
                $node = $this->sum($root->right);
            }
            return $node;
        }
    }
}

/**
 * Definition for a binary tree node.
 */
class TreeNode
{
    /** @var int|null */
    public $val = null;
    public $left = null;
    public $right = null;

    function __construct($val = 0, TreeNode $left = null, TreeNode $right = null)
    {
        $this->val = $val;
        $this->left = $left;
        $this->right = $right;
    }
}
