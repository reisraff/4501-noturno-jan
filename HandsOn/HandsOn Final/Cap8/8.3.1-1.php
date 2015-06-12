<?php

class Cliente
{
	public $nome, $cpf;

	public function __construct($nome, $cpf)
	{
		$this->nome = $nome;
		$this->cpf = $cpf;
	}

	public function getNome()
	{
		return $this->nome;
	}
}

class Clientes implements ArrayAccess
{
	// falta código que iremos implementar no próximo modelo
}

$clientes = new Clientes();
$clientes[] = new Cliente('4Linux 1', '123.456.789-00');

if(isset($clientes[0])){
	echo $clientes[0]->getNome();
	unset($clientes[0]);
}

$clientes[10] = new Cliente('4Linux 10', '123.456.789-99');