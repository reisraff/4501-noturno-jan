<?php

class Conta
{
	public function __clone()
	{
		echo "Clonamos um objeto!";
	}
}

$contaCorrente = new Conta();
$contaPoupanca = clone $contaCorrente;