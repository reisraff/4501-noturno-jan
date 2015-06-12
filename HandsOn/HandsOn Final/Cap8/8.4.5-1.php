<?php

class OddIterator extends FilterIterator
{
	public function accept()
	{
		$num = $this->getInnerIterator()->current();

		return $num % 2 === 1;
	}
}

$numeros = array(1,2,3,4,5);
$arrayIterator = new ArrayIterator($numeros);

echo "<p>Numeros impares:</p>";
foreach(new OddIterator($arrayIterator) as $num)
{
	// Este foreach só executará para os números ímpares
	echo $num."<br/>";
}