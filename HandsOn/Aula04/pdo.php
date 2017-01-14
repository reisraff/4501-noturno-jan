<?php

try {
	$pdo = new PDO(
		'mysql:host=localhost;dbname=teste;',
		'root',
		'123456'
	);

	$pdo->setAttribute(
		PDO::ATTR_ERRMODE,
		PDO::ERRMODE_EXCEPTION
	);

	$query = 'SELECT * FROM users WHERE email = :email';
	$stm = $pdo->prepare($query);
	$stm->execute([
		'email' => 'reisraff@gmail.com'
	]);
	echo '<pre>';
	print_r($stm->fetch(PDO::FETCH_ASSOC));

} catch (Exception $e) {
	echo $e->getMessage();
	// echo 'Erro de conexão';
}

