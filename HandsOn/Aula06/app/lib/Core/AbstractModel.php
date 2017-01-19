<?php

namespace Core;

abstract class AbstractModel implements ModelInterface
{
	private $db;

	public function __construct()
	{
		$this->db = DatabaseService::getInstance();
	}

	public function fetchAll($query, array $params = [])
	{
		$stm = $this->db->prepare($query);
		$stm->execute($params);

		return $stm->fetchAll(\PDO::FETCH_ASSOC);
	}
}
