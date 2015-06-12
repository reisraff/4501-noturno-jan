<?php

class Conta
{
	private $nroConta;
	private $titular;

	public function __construct($titular)
	{
		$this->titular = $titular;
		$this->nroConta = $this->gerarNroConta();
	}

	public function verTitular()
	{
		return "<p>Titular da conta: {$this->titular}</p>";
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

$conta = new Conta('4Linux');
echo $conta->verTitular();