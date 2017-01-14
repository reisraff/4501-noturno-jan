<?php

function __autoload($classe)
{
	$currentDir = __DIR__;

	$classe = str_replace('\\', DIRECTORY_SEPARATOR, $classe);

	require $currentDir
		. DIRECTORY_SEPARATOR
		. 'src'
		. DIRECTORY_SEPARATOR
		. $classe
		. '.php';
}

$controller = new Controller\Controller();
var_dump($controller);
