<?php

function __autoload($class)
{
	$class = str_replace(
		'\\',
		DIRECTORY_SEPARATOR,
		$class
	);

	$file = __DIR__
		. DIRECTORY_SEPARATOR
		. 'src'
		. DIRECTORY_SEPARATOR
		. $class
		. '.php';

	if (file_exists($file)) {
		require $file;
	} else {
		die('Class "'. $class . '" Not found');
	}
}