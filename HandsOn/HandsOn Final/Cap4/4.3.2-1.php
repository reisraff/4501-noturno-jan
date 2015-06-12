<?php

interface Ingrediente
{
	public function getPreco();
}

abstract class BaseIngrediente implements Ingrediente
{
	protected $pai;

	public function __construct(Ingrediente $pai)
	{
		$this->pai = $pai;
	}
}

class Cafe implements Ingrediente
{
	public function getPreco()
	{
		echo "<p>Cafe por R$1,20</p>";
		return 1.2;
	}
}

class Leite extends BaseIngrediente
{
	public function getPreco()
	{
		echo "<p>Adicionar Leite por R$0,45</p>";
		return $this->pai->getPreco() + 0.45;
	}
}

class Chocolate extends BaseIngrediente
{
	public function getPreco()
	{
		echo "<p>Adicionar Chocolate por R$0,95</p>";
		return $this->pai->getPreco() + 0.95;
	}
}

class Creme extends BaseIngrediente
{
	public function getPreco()
	{
		echo "<p>Adicionar Creme por R$0,55</p>";
		return $this->pai->getPreco() + 0.55;
	}
}

$cafe = new Cafe();
$cafeFinal = new Creme(new Chocolate(new Leite($cafe)));
echo "Preco final R$".$cafeFinal->getPreco();