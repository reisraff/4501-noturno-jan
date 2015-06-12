<?php

function __autoload($classe)
{
	die("Voce tentou instanciar um objeto da classe {$classe}");
}

$conta = new Conta();