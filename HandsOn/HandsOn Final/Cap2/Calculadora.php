<?php

class Calculadora
{
	public function soma($a, $b)
	{
		return $a + $b;
	}

	public function subtracao($a, $b)
	{
		return $a - $b;
	}
}

$soma = new Calculadora();
echo $soma->soma(2,3);