<?php

class Math
{
	public function soma($a, $b)
	{
		return $a + $b;
	}

	public function subtracao($a, $b)
	{
		return $a - $b;
	}

	public function divisao($a, $b)
	{
		return $a / $b;
	}

	public function multiplicacao($a, $b)
	{
		return $a * $b;
	}
}

$math = new Math();
echo "Soma de 1 + 2 = ",$math->soma(1, 2);