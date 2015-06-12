<?php

$db_mysql = new PDO("mysql:host=localhost;dbname=curso501", "curso501", "123456");
$dados = $db_mysql->query("SELECT * FROM clientes");

$obj = $dados->fetchAll(PDO::FETCH_OBJ);

echo $obj[0]->nome;
echo "<br/>";
echo $obj[1]->nome;