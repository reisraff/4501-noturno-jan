<?php

class Conta
{
	private $nroConta;
	private $titular;
	private $saldo = 0;

	public function __construct($titular, $saldoInicial = 0)
	{
		$this->titular = $titular;
		$this->saldo = $saldoInicial;
		$this->nroConta = $this->gerarNroConta();
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

	public function verTitular()
	{
		echo "<p>Titular da conta: {$this->titular}</p>";
	}

	public function verNroConta()
	{
		return $this->nroConta;
	}

	private function gerarNroConta()
	{
		return rand();
	}
}

$conta = new Conta('4Linux', '500');
$conta->verTitular();
$conta->depositar(100);
$conta->sacar(20);
$conta->verSaldo();