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
		$this->executeStmAndReturn($query, $params);
	}

	public function executeQueryAndReturn($query, array $params = [])
	{
		$stm = $this->executeStmAndReturn($query, $params);

		// $stm->fetchObject(get_class($this));

		return $stm->fetchAll(PDO::FETCH_ASSOC);
	}

	private function executeStmAndReturn($query, array $params = [])
	{
		$stm = $this->db->prepare($query);
		$stm->execute($params);

		return $stm;
	}
}
