<?php

class Cliente{
	public $nome, $cpf;

	public function __construct($nome, $cpf){
		$this->nome = $nome;
		$this->cpf = $cpf;
	}

	public function getNome(){
		return $this->nome;
	}
}

class Clientes implements ArrayAccess, Countable{
	// armazena os clientes
	private $clientes = array();

	// métodos da interface ArrayAccess (trabalham internamente com o array $clientes)
	public function offsetExists($offset){
		return isset($this->clientes[$offset]);
	}

	public function offsetGet($offset){
		return $this->clientes[$offset];
	}

	public function offsetSet($offset, $value){
		if(empty($offset)){
			$this->clientes[] = $value;
		}
		else{
			$this->clientes[$offset] = $value;
		}
	}

	public function offsetUnset($offset){
		unset($this->clientes[$offset]);
	}

	// métodos da interface Countable
	public function count(){
		return count($this->clientes);
	}
}

$clientes = new Clientes();
$clientes[] = new Cliente('4Linux 1', '123.456.789-00');

if(isset($clientes[0])){
	echo $clientes[0]->getNome();
	unset($clientes[0]);
}

$clientes[9] = new Cliente('4Linux 9', '123.456.789-09');
$clientes[10] = new Cliente('4Linux 10', '123.456.789-99');
echo "<br/>";
echo "Total de clientes: ",count($clientes);