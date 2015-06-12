<?php

function __autoload($classe)
{
	if(file_exists("{$classe}.php"))
	{
		require_once "{$classe}.php";
	}
	else
	{
		die("A classe {$classe} não foi encontrada!");
	}
}

$conta = new Conta("12345-x");
$conta->depositar(500);
$conta->verSaldo();