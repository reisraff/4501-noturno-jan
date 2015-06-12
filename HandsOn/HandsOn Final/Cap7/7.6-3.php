<?php
	
$db_mysql = new PDO("mysql:host=localhost;dbname=curso501", "curso501", "123456");

$statement = $db_mysql->prepare("INSERT INTO clientes (nome, email) VALUES (:nome, :email)");

$statement->execute(array(":nome" => "4Linux 6", ":email" => "forlinux@4linux.com.br"));
$statement->execute(array(":nome" => "4Linux 7", ":email" => "forlinux@4linux.com.br"));
$statement->execute(array(":nome" => "4Linux 8", ":email" => "forlinux@4linux.com.br"));