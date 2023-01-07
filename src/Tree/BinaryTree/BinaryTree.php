<?php

declare(strict_types=1);
/**
 * happy coding.
 */
namespace DataStructure\Tree\BinaryTree;

class BinaryTree
{
    protected ?Node $root = null;

    public function getRoot(): ?Node
    {
        return $this->root;
    }

    public function insert(string $key, array $value = []): Node
    {
        $node = new Node($key, $value);
        if (is_null($this->root)) {
            $this->root = $node;
            return $this->root;
        }

        $root = $this->root;

        if (strcmp($key, $root->getKey()) < 0) {
            $root->setLeft(! is_null($root->getLeft()) ? $this->insert($key, $value) : $node);
        }
        if (strcmp($key, $root->getKey()) >= 0) {
            $root->setRight(! is_null($root->getRight()) ? $this->insert($key, $value) : $node);
        }
        return $root;
    }

    public function remove(string $key)
    {
    }

    public function search(string $key)
    {
    }
}
