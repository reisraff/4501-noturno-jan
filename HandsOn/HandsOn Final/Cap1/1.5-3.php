<?php

class Conta
{
	public $nroConta;
	public $saldo = 0;

	public function depositar($valor)
	{
		$this->saldo += $valor;
		echo "<p>Depositando o valor de R$ {$valor} reais</p>";
	}

	public function sacar($valor)
	{
		$this->saldo -= $valor;
		echo "<p>Sacando o valor de R$ {$valor} reais</p>";
	}
}

$conta = new Conta();

$conta->depositar(100);
$conta->sacar(20);

echo "Saldo atual de R$ ",$conta->saldo, " reais";
// imprime "Saldo atual de R$ 80 reais"