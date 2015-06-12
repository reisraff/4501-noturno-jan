<?php

interface Contas
{
	public function depositar($valor);
	public function sacar($valor);
	public function verSaldo();
}

class Agencia
{
	public $numero;
	public $nome;

	public function setNumero($numero)
	{
		$this->numero = $numero;
	}

	public function getNumero()
	{
		echo "<p>Agencia Numero: {$this->numero}</p>";
	}

	public function setNome($nome)
	{
		$this->nome = $nome;
	}

	public function getNome()
	{
		echo "<p>Agencia Nome: {$this->nome}</p>";
	}
}

abstract class Conta implements Contas
{
	protected $saldo;
	protected $titular;

	public function __construct($titular, $saldoInicial)
	{
		$this->saldo = $saldoInicial;
		$this->titular = $titular;
	}

	public function sacar($valor)
	{
		$this->saldo -= $valor;
		echo "<p>Sacando o valor de R$ {$valor} reais</p>";
	}

	final public function verSaldo()
	{
		echo "<p>Saldo atual de R$ {$this->saldo} reais</p>";
	}

	public function setAgencia(Agencia $agencia)
	{
		$this->agencia = $agencia;
	}
}

final class ContaCorrente extends Conta
{
	public function depositar($valor)
	{
		$this->saldo += $valor;
		echo "<p>Depositando o valor de R$ {$valor} reais</p>";
	}
}

final class ContaPoupanca extends Conta
{
	public function depositar($valor)
	{
		$this->saldo = $valor + ($valor * 0.1) + $this->saldo;
		echo "<p>Depositando o valor de R$ {$valor} reais</p>";
	}
}

$agencia1 = new Agencia();
$agencia1->setNumero('12345-x');
$agencia1->setNome('Agencia 1');

$agencia2 = new Agencia();
$agencia2->setNumero('54321-x');
$agencia2->setNome('Agencia 2');

echo "<p>Conta Corrente:</p>";
$contaCorrente = new ContaCorrente('4Linux', 0);
$contaCorrente->depositar(50);
$contaCorrente->setAgencia($agencia1);
$contaCorrente->agencia->getNumero();
$contaCorrente->agencia->getNome();
$contaCorrente->verSaldo();

echo "<hr/>";
echo "<p>Conta Poupanca:</p>";
$contaPoupanca = new ContaPoupanca('4Linux', 0);
$contaPoupanca->depositar(50);
$contaPoupanca->setAgencia($agencia2);
$contaPoupanca->agencia->getNumero();
$contaPoupanca->agencia->getNome();
$contaPoupanca->verSaldo();