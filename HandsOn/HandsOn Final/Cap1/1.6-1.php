<?php

class Conta
{
	private $saldo = 0;

	public function depositar($valor){
		$this->saldo += $valor;
	}

	public function sacar($valor){
		$this->saldo -= $valor;
	}

	public function verSaldo(){
		return $this->saldo;
	}
}

$conta = new Conta();
$conta->depositar(100);
$conta->sacar(20);

#$conta->saldo = 1000;
#echo "Saldo atualde R$ ",$conta->saldo;
echo "Saldo atual de R$ ",$conta->verSaldo()," reais";