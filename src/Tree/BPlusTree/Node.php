<?php

declare(strict_types=1);
/**
 * happy coding!!!
 */
namespace DataStructure\Tree\BPlusTree;

class Node
{
    protected bool $isRoot = false;

    protected bool $isLeaf = false;

    protected string $key;

    protected ?string $value = null;

    protected ?Node $left = null;

    protected ?Node $right = null;

    public function isRoot(): bool
    {
        return $this->isRoot;
    }

    public function setIsRoot(bool $isRoot): self
    {
        $this->isRoot = $isRoot;
        return $this;
    }

    public function isLeaf(): bool
    {
        return $this->isLeaf;
    }

    public function setIsLeaf(bool $isLeaf): self
    {
        $this->isLeaf = $isLeaf;
        return $this;
    }

    public function getKey(): string
    {
        return $this->key;
    }

    public function setKey(string $key): self
    {
        $this->key = $key;
        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): self
    {
        $this->value = $value;
        return $this;
    }

    public function getLeft(): ?Node
    {
        return $this->left;
    }

    public function setLeft(?Node $left): self
    {
        $this->left = $left;
        return $this;
    }

    public function getRight(): ?Node
    {
        return $this->right;
    }

    public function setRight(?Node $right): self
    {
        $this->right = $right;
        return $this;
    }
}
