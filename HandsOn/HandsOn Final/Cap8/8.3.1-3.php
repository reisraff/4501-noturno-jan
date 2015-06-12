<?php

class Contas implements ArrayAccess
{
	public $titular, $saldo;

	public function offsetExists($offset)
	{
		return isset($offset);
	}

	public function offsetGet($offset)
	{
		return $this->$offset;
	}

	public function offsetSet($offset, $value)
	{
		$this->$offset = $value;
	}

	public function offsetUnset($offset)
	{
		unset($this->$offset);
	}
}

$conta = new Contas();
$conta['titular'] = '4Linux';
$conta['saldo'] = 100;

foreach($conta as $atributo => $valor)
{
	echo "$atributo: $valor<br/>";
}