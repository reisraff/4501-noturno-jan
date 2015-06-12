<?php

class Conta{
	protected $nroConta;
	protected $titular;
	protected $saldo = 0;

	public function __construct($titular, $saldoInicial = 0){
		$this->titular = $titular;
		$this->saldo = $saldoInicial;
		$this->gerarNroConta();
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
		echo "<p>Numero da conta: {$this->nroConta}</p>";
	}
}

class ContaCorrente extends Conta
{
	private $chequeEspecial = false;

	public function liberaChequeEspecial()
	{
		$this->chequeEspecial = true;
	}

	protected function gerarNroConta()
	{
		$this->nroConta = 'cc'.rand();
	}
}

class ContaPoupanca extends Conta
{
	const JUROS = 0.5;

	public function previsaoProximoMes()
	{
		$previsao = $this->saldo + (($this->saldo * self::JUROS) / 100);
		echo "<p>Previsao para proximo mes: {$previsao}</p>";
	}

	public function gerarNroConta()
	{
		$this->nroConta = 'cp'.rand();
	}
}

echo "<p>Conta Corrente:</p>";
$cc = new ContaCorrente('4Linux', 500);
$cc->verNroConta();
$cc->verSaldo();
$cc->liberaChequeEspecial();

echo "<hr/>";

echo "<p>Conta Poupanca:</p>";
$cp = new ContaPoupanca('4Linux', 20);
$cp->verNroConta();
$cp->verSaldo();
$cp->previsaoProximoMes();