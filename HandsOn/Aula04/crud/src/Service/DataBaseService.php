<?php

namespace Service;

class DataBaseService
{
	private static $db;

	public static function getInstance()
	{
		if (empty(self::$db)) {
			self::$db = new \PDO(
				'mysql:host=localhost;dbname=teste',
				'root',
				'123456'
			);
		}

		return self::$db;
	}
}
