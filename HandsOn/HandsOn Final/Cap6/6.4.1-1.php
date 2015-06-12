<?php

class Conta
{
	private $saldo = 0;

	public function __construct($saldoInicial)
	{
		$this->saldo = $saldoInicial;
	}

	public function getSaldo()
	{
		return $this->saldo;
	}
}

$conta = new Conta(50);
echo "Saldo atual de R$ ",$conta->getSaldo()," reais";