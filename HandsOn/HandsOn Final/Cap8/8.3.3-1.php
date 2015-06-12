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

class Clientes implements ArrayAccess, Countable, Iterator
{
	// armazena os clientes
	private $clientes = array();
	private $index = 0;

	// métodos da interface ArrayAccess (trabalham internamente com o array $clientes)
	public function offsetExists($offset)
	{
		return isset($this->clientes[$offset]);
	}

	public function offsetGet($offset)
	{
		return $this->clientes[$offset];
	}

	public function offsetSet($offset, $value)
	{
		if(empty($offset))
		{
			$this->clientes[] = $value;
		}
		else
		{
			$this->clientes[$offset] = $value;
		}
	}

	public function offsetUnset($offset)
	{
		unset($this->clientes[$offset]);
	}

	// métodos da interface Countable
	public function count()
	{
		return count($this->clientes);
	}

	// métodos da interface Iterator
	public function current()
	{
		return $this->clientes[$this->index];
	}

	public function key()
	{
		echo "key: $this->index<br/>";
		return $this->index;
	}

	public function valid()
	{
		return isset($this->clientes[$this->key()]);
	}

	public function next()
	{
		++$this->index;
		echo "next: $this->index<br/>";
	}

	public function rewind()
	{
		echo "rewinding<br/>";
		$this->index = 0;
	}
}

$clientes = new Clientes();
$clientes[] = new Cliente('4Linux 1', '123.456.789-01');
$clientes[] = new Cliente('4Linux 2', '123.456.789-02');
$clientes[] = new Cliente('4Linux 3', '123.456.789-03');
echo "Total de clientes: ",count($clientes);
echo "<br/>";

foreach($clientes as $chave => $valor)
{
	echo "Item: ",$chave,"<br/>";
	var_dump($valor);
	echo "<br/><br/>";
}