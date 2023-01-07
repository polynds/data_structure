<?php

declare(strict_types=1);
/**
 * happy coding.
 */
namespace DataStructure\Tree\Traversal;

class PostOrderTraversal
{
    public function UnifiedIterativeTraversal(?TreeNode $root = null): array
    {
        $result = [];
        $stack = [];
        if ($root) {
            array_push($stack, $root);
        }
        while (! empty($stack)) {
            /** @var ?TreeNode $node */
            $node = $stack[count($stack) - 1];
            if (! is_null($node)) {
                array_pop($stack);
                array_push($stack, $node);
                array_push($stack, null);
                if ($node->getRight()) {
                    array_push($stack, $node->getRight());
                }
                if ($node->getLeft()) {
                    array_push($stack, $node->getLeft());
                }
            } else {
                array_pop($stack);
                /** @var TreeNode $node */
                $node = array_pop($stack);
                if (! is_null($node)) {
                    $result[] = $node->getVal();
                }
            }
        }

        return $result;
    }

    public function iterativeTraversal(?TreeNode $root = null): array
    {
        $result = [];
        $stack = [];
        array_push($stack, $root);
        while (! empty($stack)) {
            /** @var TreeNode $node */
            $node = array_pop($stack);
            $result[] = $node->getVal();
            if ($node->getRight()) {
                array_push($stack, $node->getRight());
            }
            if ($node->getLeft()) {
                array_push($stack, $node->getLeft());
            }
        }

        return array_reverse($result);
    }

    public function preorderTraversal(?TreeNode $root = null): array
    {
        $result = [];
        $this->traversal($root, $result);
        return $result;
    }

    private function traversal(?TreeNode $root, array &$result): array
    {
        if (is_null($root)) {
            return $result;
        }
        $this->traversal($root->getLeft(), $result);
        $this->traversal($root->getRight(), $result);
        $result[] = $root->getVal();
        return $result;
    }
}
