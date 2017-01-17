<?php

require __DIR__ . '/src/Helper/Helper.php';

function autoload_app($class)
{
	$class = str_replace(
		'\\',
		DIRECTORY_SEPARATOR,
		$class
	);

	$file = __DIR__ . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR
		. $class . '.php';

	if (file_exists($file)) {
		require $file;
	}
}

function autoload_lib($class)
{
	$class = str_replace(
		'\\',
		DIRECTORY_SEPARATOR,
		$class
	);

	$file = __DIR__ . DIRECTORY_SEPARATOR . 'lib' . DIRECTORY_SEPARATOR
		. $class . '.php';

	if (file_exists($file)) {
		require $file;
	}
}

spl_autoload_register('autoload_app');
spl_autoload_register('autoload_lib');
