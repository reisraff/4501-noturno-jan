<?php

abstract class Conta
{
	protected $saldo;
	protected $titular;

	public function __construct($titular, $saldoInicial)
	{
		$this->titular = $titular;
		$this->saldo = $saldoInicial;
	}

	abstract public function depositar($valor);

	public function sacar($valor)
	{
		$this->saldo -= $valor;
		echo "<p>Sacando o valor de R$ {$valor} reais</p>";
	}

	final public function verSaldo()
	{
		echo "<p>Saldo atual de R$ {$this->saldo} reais</p>";
	}
}

final class ContaCorrente  extends Conta
{
	public function depositar($valor)
	{
		$this->saldo += $valor;
		echo "<p>Depositando o valor de R$ {$valor} reais</p>";
	}

	public function verSaldo() //ERRO
	{
		echo "<p>Saldo atual de R$ {$this->saldo} reais</p>";
	}
}

final class ContaPoupanca extends Conta 
{
	public function depositar($valor)
	{
		$this->saldo += $valor + ($valor * 0.1);
		echo "<p>Depositando o valor de R$ {$valor} reais</p>";
	}
}

echo "<p>Conta Corrente:</p>";
$contaCorrente = new ContaCorrente('4Linux', 0);
$contaCorrente->depositar(50);
$contaCorrente->verSaldo();

echo "<hr/>";
echo "<p>Conta Poupanca:</p>";
$contaPoupanca = new ContaPoupanca('4Linux', 0);
$contaPoupanca->depositar(50);
$contaPoupanca->verSaldo();