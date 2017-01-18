<?php

function config($key, $default) {
	$config = require __DIR__ . '/../../config/config.php';

	if (isset($config[$key])) {
		return $config[$key];
	}

	return $default;
}
