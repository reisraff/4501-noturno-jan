<?php

include "7.8.2-1.php";
include "7.8.3-1.php";

class ClienteCollection implements ArrayAccess
{
	// armazena os clientes
	private $clientes = array();

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
}

class ClienteMapper
{
	private $db;

	public function __construct(Db $db)
	{
		$this->db = $db;
	}

	public function save(Cliente $cliente)
	{
		if($cliente->getId())
		{
			$this->db->exec('UPDATE clientes SET nome = :nome, email = :email WHERE id = :id', array(
				':id' => $cliente->getId(),
				':nome' => $cliente->getNome(),
				':email' => $cliente->getEmail()
			));
		}
		else
		{
			$this->db->exec('INSERT INTO clientes (nome, email) VALUES (:nome, :email)', array(
				':nome' => $cliente->getNome(),
				':email' => $cliente->getEmail()
			));
		}
	}

	public function delete($id)
	{
		$this->db->exec('DELETE FROM clientes WHERE id = ?', array($id));
	}

	public function fetchAll()
	{
		$rs = $this->db->query("SELECT * FROM clientes");
		$clienteCollection = new ClienteCollection();

		foreach ($rs as $v)
		{
			$clienteCollection[] = (new Cliente())
				->setId((int) $v->id)
				->setNome($v->nome)
				->setEmail($v->email);
		}

		return $clienteCollection;
	}
}

$cliente1 = (new Cliente())
			->setId(1)
			->setNome('4Linux 01')
			->setEmail('forlinux@4linux.com.br');
var_dump($cliente1);

$cliente11 = (new Cliente())
			->setNome('4Linux 11')
			->setEmail('forlinux@4linux.com.br');
var_dump($cliente11);

$factory = new DbFactory();
$mapper = new ClienteMapper($factory->create());
$mapper->save($cliente1);
$mapper->save($cliente11);
$mapper->save($cliente11);
$mapper->delete(12);
$select = $mapper->fetchAll();
echo "<pre>";
print_r($select);
echo "</pre>";