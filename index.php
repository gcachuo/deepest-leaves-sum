<?php
require "Solution.php";

$treeNode = new TreeNode(1, new TreeNode(2, new TreeNode(4, new TreeNode(7)), new TreeNode(5)), new TreeNode(3, null, new TreeNode(6, null, new TreeNode(8))));

$solution = new Solution();
echo $solution->deepestLeavesSum($treeNode);
