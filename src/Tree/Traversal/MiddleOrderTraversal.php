<?php

declare(strict_types=1);
/**
 * happy coding.
 */
namespace DataStructure\Tree\Traversal;

class MiddleOrderTraversal
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
                if ($node->getRight()) {
                    array_push($stack, $node->getRight());
                }
                array_push($stack, $node);
                array_push($stack, null);
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
        $cur = $root;
        while (! is_null($cur) || ! empty($stack)) {
            if (! is_null($cur)) {
                array_push($stack, $cur);
                $cur = $cur->getLeft();
            } else {
                /** @var ?TreeNode $node */
                $node = array_pop($stack);
                $result[] = $node->getVal();
                if ($node->getRight()) {
                    array_push($stack, $node->getRight());
                }
            }
        }

        return $result;
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
        $result[] = $root->getVal();
        $this->traversal($root->getRight(), $result);
        return $result;
    }
}
