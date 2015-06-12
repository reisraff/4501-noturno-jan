<?php

class Math
{
	public static function soma($a, $b)
	{
		return $a + $b;
	}

	public static function subtracao($a, $b)
	{
		return $a - $b;
	}

	public static function divisao($a, $b)
	{
		return $a / $b;
	}

	public static function multiplicacao($a, $b)
	{
		return $a * $b;
	}
}

echo "Soma de 1 + 2 = ",Math::soma(1, 2);