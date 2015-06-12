<?php

$db_mysql = new PDO("mysql:host=localhost;dbname=curso501", "curso501", "123456");

$statement = $db_mysql->prepare("INSERT INTO clientes (nome, email) VALUES (?, ?)");

$statement->execute(array("4Linux 3", "forlinux@4linux.com.br"));
$statement->execute(array("4Linux 4", "forlinux@4linux.com.br"));
$statement->execute(array("4Linux 5", "forlinux@4linux.com.br"));