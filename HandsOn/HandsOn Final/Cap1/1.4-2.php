<?php

class Conta
{
	public $nroConta;
	public $saldo;
}

$conta = new Conta();

$conta->nroConta = "12345-0";
$conta->saldo = 400;

echo "Saldo atual de R$ ",$conta->saldo," reais";