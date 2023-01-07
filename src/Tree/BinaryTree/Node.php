<?php

declare(strict_types=1);
/**
 * happy coding.
 */
namespace DataStructure\Tree\BinaryTree;

class Node
{
    protected string $key;

    protected array $value = [];

    protected ?Node $left = null;

    protected ?Node $right = null;

    public function __construct(string $key, array $value = [])
    {
        $this->key = $key;
        $this->value = $value;
    }

    public function getKey(): string
    {
        return $this->key;
    }

    public function getValue(): array
    {
        return $this->value;
    }

    public function getLeft(): ?Node
    {
        return $this->left;
    }

    public function setLeft(?Node $left): Node
    {
        $this->left = $left;
        return $this;
    }

    public function getRight(): ?Node
    {
        return $this->right;
    }

    public function setRight(?Node $right): Node
    {
        $this->right = $right;
        return $this;
    }

    public function isLeafNode(): bool
    {
        return is_null($this->left) && is_null($this->right);
    }
}
