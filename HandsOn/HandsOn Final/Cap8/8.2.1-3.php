<?php

$expr = '(((1+2) * a / b - (2 * 4) - (4/5)) + 12)';

function validaParenteses($string)
{
	$stack = new SplStack();

	try{
		for($i=0, $l = strlen($string); $i < $l; ++$i)
		{
			if($string[$i] == '(')
			{
				$stack->push($string[$i]);
			}
			elseif($string[$i] == ')')
			{
				$stack->pop();
			}
		}
	}
	catch(RuntimeException $e){
		// erro de pilha vazia, logo expressão está errada
		return false;
	}

	// se a pilha estiver vazia significa que todo parênteses aberto foi fechado
	return count($stack) === 0;
}

if(validaParenteses($expr))
{
	echo 'Expressao com parenteses corretos';
}
else
{
	echo 'Algo esta errado com os parenteses dessa expressao';
}