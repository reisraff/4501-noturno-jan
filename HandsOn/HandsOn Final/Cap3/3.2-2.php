<?php

abstract class FormaGeometrica
{
	protected $area;

	public function getArea()
	{
		if(!$this->area)
		{
			$this->area = $this->calcularArea();
		}

		return $this->area;
		
	}

	abstract protected function calcularArea();
}

class Quadrado extends FormaGeometrica
{
	private $tamanho;

	public function __construct($tamanho)
	{
		$this->tamanho = $tamanho;
	}

	protected function calcularArea()
	{
		return pow($this->tamanho, 2);
	}
}

$quadrado = new Quadrado(10);
echo "Area do quadrado: {$quadrado->getArea()}";