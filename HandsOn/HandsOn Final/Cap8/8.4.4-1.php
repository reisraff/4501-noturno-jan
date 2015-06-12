<?php

$arrayFrutas = array('melancia', 'banana', 'cereja', 'abacaxi', 'laranja');

// Cria um iterator
$frutas = new ArrayIterator($arrayFrutas);

// Faz um loop dos três primeiros elementos
foreach(new LimitIterator($frutas, 0, 3) as $fruta)
{
	echo "- ".$fruta."<br/>";
}

echo "<br/>";

// Faz um loop a partir do terceiro elemento
foreach(new LimitIterator($frutas, 2) as $fruta)
{
	echo "- ".$fruta."<br/>";
}