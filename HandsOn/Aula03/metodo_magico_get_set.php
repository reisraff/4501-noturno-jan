<?php

class Objeto
{
	private $props = [];

	public function __get($prop)
	{
		return isset($this->props[$prop]) ? 
			$this->props[$prop] :
			null;
	}

	public function __set($prop, $val)
	{
		$this->props[$prop] = $val;
	}
}

$obj = new Objeto;

var_dump($obj->algumaCoisa);
$obj->algumaCoisa = 'algumaCoisa';
echo '<br />';
var_dump($obj->algumaCoisa);
