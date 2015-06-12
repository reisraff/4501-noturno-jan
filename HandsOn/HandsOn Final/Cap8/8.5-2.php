<?php
	
function carregarClasse($classe)
{
	if(file_exists("classes/class.{$classe}.php"))
	{
		require_once("classes/class.{$classe}.php");
	}
}

function carregarBiblioteca($classe)
{
	if(file_exists("lib/class.{$classe}.php"))
	{
		require_once("lib/class.{$classe}.php");
	}
}

spl_autoload_register('carregarClasse');
spl_autoload_register('carregarBiblioteca');

$conta = new Conta();
$validacao = new Validar();