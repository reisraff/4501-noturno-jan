<?php

$db_mysql = new PDO("mysql:host=localhost;dbname=curso501", "curso501", "123456");
$db_mysql->exec("CREATE TABLE clientes (id INT NOT NULL AUTO_INCREMENT, nome VARCHAR(255), email VARCHAR(255), PRIMARY KEY(id))");
$db_mysql->exec("INSERT INTO clientes (nome, email) VALUES ('4Linux 1', 'forlinux@4linux.com.br')");
$db_mysql->exec("INSERT INTO clientes (nome, email) VALUES ('4Linux 2', 'forlinux@4linux.com.br')");

$db_postgres = new PDO("pgsql:host=localhost;dbname=curso501", "curso501", "123456");
$db_postgres->exec("CREATE TABLE clientes (id SERIAL, nome VARCHAR(255), email VARCHAR(255))");
$db_postgres->exec("INSERT INTO clientes (nome, email) VALUES ('4Linux', 'forlinux@4linux.com.br')");
$db_postgres->exec("INSERT INTO clientes (nome, email) VALUES ('4Linux 2', 'forlinux@4linux.com.br')");