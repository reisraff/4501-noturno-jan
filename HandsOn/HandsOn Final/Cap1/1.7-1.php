<?php

class Conta
{
	private $nroConta;

	public function __construct()
	{
		$this->nroConta = $this->gerarNroConta();
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

$conta = new Conta();
echo "Numero da Conta: ", $conta->verNroConta();