<?php

class Conta
{
	private $saldo = 10;
	private $nroConta = '12345-x';

	public function __toString()
	{
		return $this->nroConta;
	}

	public function getSaldo()
	{
		return $this->saldo;
	}
}

$conta = new Conta();
echo "A conta {$conta} possui saldo de R$ {$conta->getSaldo()} reais";