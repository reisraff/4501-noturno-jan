<?php

class Agencia
{
	public $numero;
	public $nome;
	
	public function setNumero($numero)
	{
		$this->numero = $numero;
	}

	public function getNumero()
	{
		return $this->numero;
	}

	public function setNome($nome)
	{
		$this->nome = $nome;
	}

	public function getNome()
	{
		return $this->nome;
	}
}

echo "<pre><hr/>Atributos:";
$reflection = new ReflectionClass('Agencia');
print_r($reflection->getProperties());

echo "<hr/>Metodos:";
print_r($reflection->getMethods());
echo "</pre>";