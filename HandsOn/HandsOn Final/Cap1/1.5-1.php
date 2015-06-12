<?php

class Conta
{
	public $nroConta;
	public $saldo;

	public function depositar($valor)
	{
		echo "<p>Depositando o valor de R$ {$valor} reais</p>";
	}

	public function sacar($valor)
	{
		echo "<p>Sacando o valor de R$ {$valor} reais</p>";
	}
}