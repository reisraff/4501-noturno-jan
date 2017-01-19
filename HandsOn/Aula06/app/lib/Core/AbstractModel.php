<?php

namespace Core;

abstract class AbstractModel implements ModelInterface
{
	private $db;

	public function __construct()
	{
		$this->db = DatabaseService::getInstance();
	}

	protected function fetch($query, array $params = [])
	{
		$stm = $this->db->prepare($query);
		$stm->execute($params);

		return $stm->fetch(\PDO::FETCH_ASSOC);
	}

	protected function fetchAll($query, array $params = [])
	{
		$stm = $this->db->prepare($query);
		$stm->execute($params);

		return $stm->fetchAll(\PDO::FETCH_ASSOC);
	}

	protected function executeQuery($query, array $params = [])
	{
		$stm = $this->db->prepare($query);
		$stm->execute($params);
	}

	protected function getLastInsertedId()
	{
		return $this->db->lastInsertId();
	}
}
