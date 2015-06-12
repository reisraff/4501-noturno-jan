<?php

class Cliente
{
	private $id;
	private $nome;
	private $email;

	// ID
	public function setId($id)
	{
		if(!is_int($id))
		{
			throw new \InvalidArgumentException("ID inválido");
		}
		$this->id = $id;
		return $this;
	}

	public function getId()
	{
		return $this->id;
	}

	// NOME
	public function setNome($nome)
	{
		if(strlen($nome) > 40)
		{
			throw new \InvalidArgumentException("Nome do Cliente nao pode ter mais de 40 caracteres");
		}
		$this->nome = $nome;
		return $this;
	}

	public function getNome()
	{
		return $this->nome;
	}

	// EMAIL
	public function setEmail($email)
	{
		// valida o email
		$this->email = $email;
		return $this;
	}

	public function getEmail()
	{
		return $this->email;
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
