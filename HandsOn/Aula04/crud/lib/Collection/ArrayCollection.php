<?php

namespace Collection;

class ArrayCollection implements \Iterator, \Countable
{
	private $stack = [];

	private $indice;

	public function count()
	{
		return count($this->stack);
	}

	public function current()
	{
		return $this->stack[$this->indice];
	}

	public function next()
	{
		return $this->indice++;
	}

	public function key()
	{
		return $this->indice;
	}

	public function valid()
	{
		return isset($this->stack[$this->indice]);
	}

	public function rewind()
	{
		$this->indice = 0;
	}

	public function addItem($item)
	{
		$this->stack[] = $item;
	}

	public function setItems(array $items)
	{
		$this->stack = $items;
	}
}
