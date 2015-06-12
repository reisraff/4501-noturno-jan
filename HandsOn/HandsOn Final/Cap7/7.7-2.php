<?php

try{
	$db_mysql = new PDO("mysql:host=localhost;dbname=curso501", "curso", "123456");
	$db_mysql->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
	echo "Falha na conexão: ".$e->getMessage();
}
	