<?php

require __DIR__ . '/lib/Core/Functions.php';

function autoload_src($class) {
	$class = str_replace('\\', DIRECTORY_SEPARATOR, $class);

	$file = __DIR__ . '/src/' . $class . '.php';

	if (file_exists($file)) {
		require $file;
	}
}

function autoload_lib($class) {
	$class = str_replace('\\', DIRECTORY_SEPARATOR, $class);

	$file = __DIR__ . '/lib/' . $class . '.php';

	if (file_exists($file)) {
		require $file;
	}
}

spl_autoload_register('autoload_src');
spl_autoload_register('autoload_lib');
