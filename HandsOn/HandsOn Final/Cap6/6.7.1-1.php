<?php

class Conta
{
	private $saldo = 0;
	private $titular;
	private $numero;
	private $agencia;

	public function __call($metodo, array $parametros)
	{
		$atributo = lcfirst(substr($metodo, 3));
		$acao     = substr($metodo, 0, 3);

		switch($acao)
		{
			case 'get':
				return $this->$atributo;
				break;
			case 'set':
				$this->$atributo = $parametros[0];
				break;
			default:
				throw new InvalidArgumentException("Metodo {$metodo} Invalido");
				break;
		}
	}
}

try{
	$novaConta = new Conta();
	$novaConta->setNumero('12345-x');
	$novaConta->setTitular('4Linux');

	echo "Numero da Conta: {$novaConta->getNumero()}<br/>";
	echo "Saldo: {$novaConta->getSaldo()}";
}
catch(Exception $erro){
	echo $erro->getMessage();
}