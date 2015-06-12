<?php

class Conta
{
	private $titular = '4Linux';

	public function __set($name, $value)
	{
		echo "Setando '{$name}' com valor '{$value}'<br/>";
		$this->$name = $value;
	}

	public function __get($name)
	{
		echo "Pegando '{$name}'<br/>";
		return $this->$name;
	}

	public function __isset($name)
	{
		echo "'{$name}' esta setado?<br/>";
		return isset($this->$name);
	}

	public function __unset($name)
	{
		echo "Apagando '{$name}'<br/>";
		unset($this->$name);
	}
}

echo "<pre>";
$conta = new Conta();

$conta->saldo = 10;
echo $conta->titular . "<br/><br/>";

var_dump(isset($conta->agencia));
unset($conta->agencia);
echo "</pre>";