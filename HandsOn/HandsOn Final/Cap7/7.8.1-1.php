<?php

class Db
{
	private $host, $db, $user, $pass, $pdo;
		
	public function __construct($host, $db, $user, $pass)
	{
		$this->host = $host;
		$this->db = $db;
		$this->user = $user;
		$this->pass = $pass;
	}

	public function connect()
	{
		$this->pdo = new PDO("mysql:host={$this->host};dbname={$this->db}", $this->user, $this->pass);
	}

	public function exec($query, array $args = array())
	{
		$stmt = $this->pdo->prepare($query);
		$stmt->execute($args);
		return $stmt->rowCount();
	}

	public function query($query, array $args = array())
	{
		$stmt = $this->pdo->query($query);
		return $stmt->fetchAll(PDO::FETCH_OBJ);
	}
}

class DbFactory
{
	public function create()
	{
		$cfg = include __DIR__.'/config/cfg.php';

		$db = new Db($cfg['host'], $cfg['db'], $cfg['user'], $cfg['pass']);
		$db->connect();

		return $db;
	}
}

$factory = new DbFactory();

$db = $factory->create();
$db->exec('INSERT INTO clientes (nome, email) VALUES (?, ?)', array("4Linux 9", "forlinux@4linux.com.br"));