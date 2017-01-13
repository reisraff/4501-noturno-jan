<?php

class Objeto
{
	public function __destruct()
	{
		echo 'O objeto está sendo destruido';
	}
}

$obj = new Objeto();
unset($obj);
