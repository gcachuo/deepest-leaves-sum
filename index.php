<?php
require "Solution.php";

$treeNode = new TreeNode(1, new TreeNode(2, new TreeNode(4, new TreeNode(7)), new TreeNode(5)), new TreeNode(3, null, new TreeNode(6, null, new TreeNode(8))));

$solution = new Solution();
echo $solution->deepestLeavesSum($treeNode) . "\n";

/**
 * 6
 * 7            8
 * 2            7       1               3
 * 9    null    1   4   null    null    null    5
 */
$treeNode = new TreeNode(6, new TreeNode(7, new TreeNode(2, new TreeNode(9)), new TreeNode(7, new TreeNode(1), new TreeNode(4))), new TreeNode(8, new TreeNode(1), new TreeNode(3, null, new TreeNode(5))));

$solution = new Solution();
echo $solution->deepestLeavesSum($treeNode) . "\n";

