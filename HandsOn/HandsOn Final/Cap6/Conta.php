<?php

class Conta
{
	private $saldo;

	public function depositar($valor)
	{
		$this->saldo += $valor;
		echo "<p>Depositando o valor de R$ {$valor} reais</p>";
	}

	public function verSaldo()
	{
		echo "Saldo atual de R$ ".$this->saldo." reais";
	}
}