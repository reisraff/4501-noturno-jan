<?php

function divisao($a, $b)
{
	if($b === 0)
	{
		throw new Exception("Divisor nao pode ser 0");
	}

	return $a / $b;
}

divisao(1, 0);