<?php

namespace Service;

class DataBaseService
{
	private static $db;

	public static function getInstance()
	{
		if (empty(self::$db)) {
			$db_host = config('db_host', 'localhost');
			$db_name = config('db_name', 'teste');
			$db_user = config('db_user', 'root');
			$db_pass = config('db_pass', '123456');

			self::$db = new \PDO(
				'mysql:host=' . $db_host . ';dbname=' . $db_name,
				$db_user,
				$db_pass
			);
		}

		return self::$db;
	}
}
