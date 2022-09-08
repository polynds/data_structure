<?php

declare(strict_types=1);
/**
 * happy coding!!!
 */
namespace DataStructure\String;

use ArrayAccess;
use Countable;
use IteratorAggregate;

class Rune implements ArrayAccess, Countable, IteratorAggregate
{
    /**
     * @var int[]
     */
    protected array $runes;

    protected string $words;

    public function __construct(string $words)
    {
        $this->words = $words;
        $this->parse();
    }

    public function offsetExists($offset)
    {
        // TODO: Implement offsetExists() method.
    }

    public function offsetGet($offset)
    {
        // TODO: Implement offsetGet() method.
    }

    public function offsetSet($offset, $value)
    {
        // TODO: Implement offsetSet() method.
    }

    public function offsetUnset($offset)
    {
        // TODO: Implement offsetUnset() method.
    }

    public function count()
    {
        // TODO: Implement count() method.
    }

    public function getIterator()
    {
        // TODO: Implement getIterator() method.
    }

    protected function parse()
    {
        $len = strlen($this->words);
        for ($i=0;$i<$len;$i++){
            $this->runes[] = $this->words[$i];
        }
    }
}
