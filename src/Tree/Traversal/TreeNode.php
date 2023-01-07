<?php

declare(strict_types=1);
/**
 * happy coding.
 */
namespace DataStructure\Tree\Traversal;

class TreeNode
{
    protected $val;

    protected ?TreeNode $left = null;

    protected ?TreeNode $right = null;

    /**
     * @param $val
     */
    public function __construct($val)
    {
        $this->val = $val;
    }

    /**
     * @return mixed
     */
    public function getVal()
    {
        return $this->val;
    }

    /**
     * @param mixed $val
     */
    public function setVal($val): TreeNode
    {
        $this->val = $val;
        return $this;
    }

    public function getLeft(): ?TreeNode
    {
        return $this->left;
    }

    public function setLeft(?TreeNode $left): TreeNode
    {
        $this->left = $left;
        return $this;
    }

    public function getRight(): ?TreeNode
    {
        return $this->right;
    }

    public function setRight(?TreeNode $right): TreeNode
    {
        $this->right = $right;
        return $this;
    }
}
