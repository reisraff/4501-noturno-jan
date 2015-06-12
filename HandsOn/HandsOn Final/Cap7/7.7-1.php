<?php

$db_mysql = new PDO("mysql:host=localhost;dbname=curso501", "curso501", "123456");
$db_mysql->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);