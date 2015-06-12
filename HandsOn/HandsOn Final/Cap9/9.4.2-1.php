<?php

class Cliente
{
	private $nome;
	
	public function __construct($nome)
	{
		echo "<p>Construindo Cliente...</p>";
		$this->nome = $nome;
	}

	public function getNome()
	{
		return $this->nome;
	}
}

class ClienteMapper
{
	public function save(Cliente $cliente)
	{
		echo "<p>Salvo cliente {$cliente->getNome()}</p>";
	}
}

class ClienteFacade
{
	public function save($nome)
	{
		$cliente = new Cliente($nome);
		$mapper = new ClienteMapper();
		return $mapper->save($cliente);
	}
}

$facade = new ClienteFacade();
$facade->save('4Linux');