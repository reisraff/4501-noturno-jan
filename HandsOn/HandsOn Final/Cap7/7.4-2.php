<?php

$db_mysql = new PDO("mysql:host=localhost;dbname=curso501", "curso501", "123456");
$dados = $db_mysql->query("SELECT * FROM clientes");

$um = $dados->fetch();
$todos = $dados->fetchAll();

echo "<pre>";
print_r($um);
echo "<br/>";
print_r($todos);
echo "</pre>";