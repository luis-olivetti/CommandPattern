<?php
namespace command\restaurante\iterator;

class OrderIterator implements \Iterator
{
    /**
     * @var Collection
     */
    private $collection;

    /**
     * @var int
     */
    private $position = 0;

    /**
     * @var bool
     */
    private $reverse = false;

    public function __construct($collection, $reverse = false)
    {
        $this->collection = $collection;
        $this->reverse = $reverse;
    }

    public function rewind()
    {
        $this->position = $this->reverse ?
            count($this->collection->getItems()) - 1 : 0;
    }

    public function current()
    {
        return $this->collection->getItems()[$this->position];
    }

    public function key()
    {
        return $this->position;
    }

    public function next()
    {
        $this->position = $this->position + ($this->reverse ? -1 : 1);
    }

    public function valid()
    {
        return isset($this->collection->getItems()[$this->position]);
    }
}

class Collection implements \IteratorAggregate
{
    private $items = [];

    public function getItems()
    {
        return $this->items;
    }

    public function addItem($item)
    {
        $this->items[] = $item;
    }

    public function getIterator(): \Iterator
    {
        return new OrderIterator($this);
    }

    public function getReverseIterator(): \Iterator
    {
        return new OrderIterator($this, true);
    }
}
?>