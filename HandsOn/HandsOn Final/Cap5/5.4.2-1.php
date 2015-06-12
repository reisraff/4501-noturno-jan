<?php

class NaoPodeDividirPorZeroException extends Exception
{
}

class ValorInfinitoException extends Exception
{
}

function dividir($a, $b)
{
	if($b === 0)
	{
		if($a === 0)
		{
			throw new ValorInfinitoException();
		}
		throw new NaoPodeDividirPorZeroException();
	}

	return $a / $b;
}

try{
	echo "<p>Divisao de 2 por 1 = ", dividir(2, 1), "</p>";
}
catch(NaoPodeDividirPorZeroException $e){
	echo "<p>Valor nao pode ser dividido por zero</p>";
}
catch(ValorInfinitoException $e){
	echo "<p>Valor infinito</p>";
}

try{
	echo "<p>Divisao de 2 por 0 = ", dividir(2, 0), "</p>";
}
catch(NaoPodeDividirPorZeroException $e){
	echo "<p>Valor nao pode ser dividido por zero</p>";
}
catch(ValorInfinitoException $e){
	echo "<p>Valor infinito</p>";
}

try{
	echo "<p>Divisao de 0 por 0 = ", dividir(0, 0), "</p>";
}
catch(NaoPodeDividirPorZeroException $e){
	echo "<p>Valor nao pode ser dividido por zero</p>";
}
catch(ValorInfinitoException $e){
	echo "<p>Valor infinito</p>";
}