<?php

namespace Tree\BinaryTree;

use DataStructure\Tree\BinaryTree\BinaryTree;
use PHPUnit\Framework\TestCase;

class BinaryTreeTest extends TestCase
{
    public function testBST(){
        $root = new BinaryTree();
        $root->insert(1);
        $root->insert(2);
        $root->insert(4);
        var_dump($root);
        self::assertTrue(true);
    }
}
