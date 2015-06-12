<?php

require 'Calculadora.php';

class CalculadoraTest extends PHPUnit_Framework_TestCase
{
	public function testSoma()
	{
		$calculadora = new Calculadora();
		$this->assertSame(5, $calculadora->soma(2, 3));
		$this->assertSame(4, $calculadora->soma(1, 3));
		$this->assertSame(9, $calculadora->soma(5, 4));
		$this->assertSame(1, $calculadora->soma(1, 0));
	}

	public function testSubtracao()
	{
		$calculadora = new Calculadora();
		$this->assertSame(5, $calculadora->subtracao(9, 4));
		$this->assertSame(4, $calculadora->subtracao(7, 3));
		$this->assertSame(1, $calculadora->subtracao(2, 1));
		$this->assertSame(1, $calculadora->subtracao(1, 0));
	}
}