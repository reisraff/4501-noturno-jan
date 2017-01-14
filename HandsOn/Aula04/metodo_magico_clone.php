<?php

class Objeto
{
	public function __clone()
	{
		echo 'O objeto está sendo clonado';
	}
}

$obj = new Objeto();
$objClone = clone $obj;

echo '<br /><pre>';
var_dump($obj);
var_dump($objClone);

