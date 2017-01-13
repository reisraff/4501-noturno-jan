<?php

class Pessoa
{
	public $nome;

	public function __toString()
	{
		return $this->nome;
	}
}

$pessoa = new Pessoa();
$pessoa->nome = 'Rafael Reis';
echo $pessoa;
