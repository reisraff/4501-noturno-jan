<?php

class Objeto
{
	public function __isset($prop)
	{
		echo 'Verificando se ' . $prop . ' existe';
	}

	public function __unset($prop)
	{
		echo 'Apagando ' . $prop . ' da memória';
	}
}

$obj = new Objeto;

isset($obj->teste);
echo '<br />';
unset($obj->teste);