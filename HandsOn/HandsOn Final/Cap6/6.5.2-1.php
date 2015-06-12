<?php

class Conta
{
	private $saldo = 10;

	public function __get($name)
	{
		return $this->$name;
	}
}

$conta = new Conta();
echo 'Saldo atual de R$ ',$conta->saldo,' reais';