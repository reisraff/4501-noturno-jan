<?php

class Retangulo
{
	private $lado1;
	private $lado2;

	public function __construct($lado1, $lado2)
	{
		$this->lado1 = $lado1;
		$this->lado2 = $lado2;
	}

	public function getArea()
	{
		return $this->lado1 * $this->lado2;
	}
}

class Quadrado extends Retangulo
{
	private $lado;

	public function __construct($lado)
	{
		parent::__construct($lado, $lado);
	}
}

echo "<p>Retangulo</p>";
$retangulo = new Retangulo(10, 20);
echo "Area do Retangulo: {$retangulo->getArea()}";

echo "<hr/>";
echo "<p>Quadrado</p>";
$quadrado = new Quadrado(10);
echo "Area do Quadrado: {$quadrado->getArea()}";