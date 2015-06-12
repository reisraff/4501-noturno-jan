<?php

function divisao($a, $b)
{
	if($b === 0)
	{
		throw new Exception("Divisor nao pode ser 0");
	}

	return $a / $b;
}

try{
	divisao(1, 0);	
} catch(Exception $e){
	echo $e->getMessage();
}	