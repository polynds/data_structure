<?php

declare(strict_types=1);
/**
 * happy coding.
 */
namespace Tree\BinaryTree;

use DataStructure\Tree\BinaryTree\BinaryTree;
use DataStructure\Tree\Traversal\MiddleOrderTraversal;
use DataStructure\Tree\Traversal\PostOrderTraversal;
use DataStructure\Tree\Traversal\PreambleTraversal;
use DataStructure\Tree\Traversal\TreeNode;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 * @coversNothing
 */
class BinaryTreeTest extends TestCase
{
    public function testBST()
    {
        $root = new BinaryTree();
        $root->insert(1);
        $root->insert(2);
        $root->insert(4);
        var_dump($root);
        self::assertTrue(true);
    }

    public function testTraversal()
    {
        $root = new TreeNode(1);
        $left1 = new TreeNode(2);
        $left2 = new TreeNode(3);
        $left1->setLeft($left2);
        $right2 = new TreeNode(6);
        $left2->setRight($right2);
        $right1 = new TreeNode(5);
        $left3 = new TreeNode(4);
        $right2->setLeft($left3);
        $root->setLeft($left1);
        $root->setRight($right1);
        var_dump($root);
        var_dump('递归法：');
        var_dump((new PreambleTraversal())->preorderTraversal($root));
        var_dump((new MiddleOrderTraversal())->preorderTraversal($root));
        var_dump((new PostOrderTraversal())->preorderTraversal($root));
        var_dump('迭代法：');
        var_dump((new PreambleTraversal())->iterativeTraversal($root));
        var_dump((new MiddleOrderTraversal())->iterativeTraversal($root));
        var_dump((new PostOrderTraversal())->iterativeTraversal($root));
        var_dump('统一迭代法：');
        var_dump((new PreambleTraversal())->UnifiedIterativeTraversal($root));
        var_dump((new MiddleOrderTraversal())->UnifiedIterativeTraversal($root));
        var_dump((new PostOrderTraversal())->UnifiedIterativeTraversal($root));
        self::assertTrue(true);
    }
}
