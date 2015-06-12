<?php

namespace Modelo;

class Cliente
{
	private $nome;
	
	public function __construct($nome)
	{
		$this->nome = $nome;
	}

	public function mostraNome()
	{
		echo 'Bem-vindo, ', $this->nome;
	}
}