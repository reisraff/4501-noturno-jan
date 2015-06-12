<?php

$db_mysql = new PDO("mysql:host=localhost;dbname=curso501", "curso501", "123456");

$statement = $db_mysql->prepare("INSERT INTO clientes (nome, email) VALUES (?, ?)");