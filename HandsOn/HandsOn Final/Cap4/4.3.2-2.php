<?php

interface Produto
{
	public function getPreco();
}

class Camiseta4Linux implements Produto
{
	public function getPreco()
	{
		return 20;
	}
}

class EmbalagemPresente implements Produto
{
	private $produto;

	public function __construct(Produto $produto)
	{
		$this->produto = $produto;
	}

	public function getPreco()
	{
		return $this->produto->getPreco() + 5;
	}
}

class CartaoPresente implements Produto
{
	private $produto;

	public function __construct(Produto $produto)
	{
		$this->produto = $produto;
	}

	public function getPreco()
	{
		return $this->produto->getPreco() + 2;
	}
}

$camiseta = new Camiseta4Linux();
$presente = new CartaoPresente(new EmbalagemPresente($camiseta));
echo "Valor total do presente R$",$presente->getPreco();