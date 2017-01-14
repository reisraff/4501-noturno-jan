<?php

if ($_POST) {
	require __DIR__
		. DIRECTORY_SEPARATOR
		. '..'
		. DIRECTORY_SEPARATOR
		. 'bootstrap.php';

	$user = new Entity\User();
	$user->setName($_POST['name']);
	$user->setEmail($_POST['email']);
	var_dump($user);
	die;
}

?>
<html>
<head>
	<title>Criar</title>
</head>
<body>

	<form method="POST">
		<label>Name:</label><input type="text" name="name" /><br />
		<label>Email:</label><input type="text" name="email" /><br />
		<input type="submit" value="Criar" />
	</form>

</body>
</html>