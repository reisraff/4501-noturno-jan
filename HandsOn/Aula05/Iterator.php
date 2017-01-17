<?php

// Iterator.php

class Object
{
	private $number;

	public function __construct($number)
	{
		$this->number = $number;
	}

	public function __toString()
	{
		return (string) $this->number;
	}
}

class ArrayCollection implements Iterator, Countable
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

$obj1 = new Object(1);
$obj2 = new Object(2);
$obj3 = new Object(3);
$obj4 = new Object(4);
$obj5 = new Object(5);

$arrayCollection = new ArrayCollection();
// $arrayCollection->addItem($obj1);
// $arrayCollection->addItem($obj2);
// $arrayCollection->addItem($obj3);
// $arrayCollection->addItem($obj4);
// $arrayCollection->addItem($obj5);
$arrayCollection->setItems([
	$obj1,
	$obj2,
	$obj3,
	$obj4,
	$obj5,
]);

foreach($arrayCollection as $item) {
	echo $item . '<br />';
}

echo '<hr />';

echo count($arrayCollection);
