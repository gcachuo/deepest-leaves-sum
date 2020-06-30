<?php

class Solution
{
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

    function sum($root, $currentDepth = 0)
    {
        if ($root == null) {
            return null;
        } else {
            $currentDepth += 1;
            $root->depth = $currentDepth;
            if (!$root->right && !$root->left) {
                if ($root->depth > $this->maxDepth) {
                    $this->maxDepth = $currentDepth;
                    $currentDepth = 0;
                    $this->sum = 0;
                }
                if ($root->depth == $this->maxDepth) {
                    $this->sum += $root->val;
                }
            }
            $node = $this->sum($root->left, $currentDepth);
            if ($node == null) {
                $node = $this->sum($root->right, $currentDepth);
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
    public $depth = 0;

    function __construct($val = 0, TreeNode $left = null, TreeNode $right = null)
    {
        $this->val = $val;
        $this->left = $left;
        $this->right = $right;
    }
}
