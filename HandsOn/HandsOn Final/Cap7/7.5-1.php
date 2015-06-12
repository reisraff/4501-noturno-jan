<?php

$db_mysql = new PDO("mysql:host=localhost;dbname=curso501", "curso501", "123456");
$db_mysql->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$db_mysql->beginTransaction();

try{
	$db_mysql->exec("UPDATE pedidos SET compra = 5641");
	$db_mysql->exec("UPDATE cliente SET compra = 5641");
	$db_mysql->exec("INSERT INTO logistica (compra) VALUES (5641)");

	$db_mysql->commit();
}
catch(PDOException $e){
	$db_mysql->rollback();
}