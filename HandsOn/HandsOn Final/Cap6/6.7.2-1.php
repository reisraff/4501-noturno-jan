<?php
	
class Conta
{
	public static function __callStatic($metodo, array $parametros)
	{
		echo "<p>O metodo {$metodo} recebe os parametros ".json_encode($parametros)."</p>";
	}
}

$conta = array("12345-x", 50);
$novaConta = Conta::criarConta($conta);

$titular = '4Linux';
$novaConta = Conta::setarTitular($titular);