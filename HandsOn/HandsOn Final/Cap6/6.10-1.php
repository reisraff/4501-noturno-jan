<?php

class Conta
{
	public function __invoke($valor)
	{
		echo "Voce passou como parametro o valor $valor";
	}
}

$conta = new Conta();
$conta('Corrente');