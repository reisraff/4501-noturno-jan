<?php

abstract class Conta
{
	protected $saldo = 0;
	protected $titular;

	public function __construct($titular, $saldoInicial = 0)
	{
		$this->titular = $titular;
		$this->saldo = $saldoInicial;
	}

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

	public function verSaldo()
	{
		echo "<p>Saldo atual de R$ {$this->saldo} reais</p>";
	}
}

class ContaCorrente extends Conta
{
}

class ContaPoupanca extends Conta
{
}

echo "<p>Conta Corrente:</p>";
$contaCorrente = new ContaCorrente('4Linux', 500);
$contaCorrente->verSaldo();

echo "<hr/>";
echo "<p>Conta Poupanca:</p>";

$contaPoupanca = new ContaPoupanca('4Linux', 40);
$contaPoupanca->depositar(50);
$contaPoupanca->verSaldo();

echo "<hr/>";
echo "<p>Conta:</p>";
$conta = new Conta(); // erro