<?php

$db_mysql = new PDO("mysql:host=localhost;dbname=curso501", "curso501", "123456");
$dados = $db_mysql->query("SELECT * FROM clientes");

$associativo = $dados->fetchAll(PDO::FETCH_ASSOC);
$numerico = $dados->fetchAll(PDO::FETCH_NUM);

echo "<pre>";
print_r($associativo);
echo "<br/>";
print_r($numerico);
echo "</pre>";