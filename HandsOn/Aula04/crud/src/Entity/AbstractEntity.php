<?php

namespace Entity;

use Service\DataBaseService;

abstract class AbstractEntity implements InterfaceEntity
{
	private $db;

	public function __construct()
	{
		$this->db = DataBaseService::getInstance();
	}

	public function executeQuery($query, array $params = [])
	{
		$stm = $this->db->prepare($query);
		$stm->execute($params);
	}

	public function getLastInsertedId()
	{
		return $this->db->lastInsertId();
	}

	public function fetch($query, array $params = [])
	{
		$stm = $this->db->prepare($query);
		$stm->execute($params);

		return $stm->fetch(\PDO::FETCH_ASSOC);
	}

	public function fetchAll($query, array $params = [])
	{
		$stm = $this->db->prepare($query);
		$stm->execute($params);

		return $stm->fetchAll(\PDO::FETCH_ASSOC);
	}
}
