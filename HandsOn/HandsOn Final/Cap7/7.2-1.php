<?php

//MySQL
$db_mysql = new PDO("mysql:host=localhost;dbname=curso501", "curso501", "123456");
//PostgreSQL
$db_postgres = new PDO("pgsql:host=localhost;dbname=curso501", "curso501", "123456");
//SQLite
#$db_sqlite = new PDO("sqlite:curso501.sqlite");