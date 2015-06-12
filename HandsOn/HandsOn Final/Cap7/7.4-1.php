<?php

$db_mysql = new PDO("mysql:host=localhost;dbname=curso501", "curso501", "123456");
$dados = $db_mysql->query("SELECT * FROM clientes");

echo "<pre>";
foreach($dados as $registro)
{
	print_r($registro);
}
echo "</pre>";