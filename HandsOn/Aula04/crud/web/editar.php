<?php
	$id = isset($_GET['id']) ? $_GET['id'] : null;

	if ($id == null) {
		echo '
ID Não passado<br />
<a href="index.php">Voltar</a>
';
		die();
	}

	require __DIR__
		. DIRECTORY_SEPARATOR
		. '..'
		. DIRECTORY_SEPARATOR
		. 'bootstrap.php';

	$user = new Entity\User();
	$user = $user->getById($id);

	if ($user == null) {
		echo '
Usuário não existe<br />
<a href="index.php">Voltar</a>
';
		die();
	}

	if ($_POST) {
		$user->setName($_POST['name']);
		$user->setEmail($_POST['email']);

		$user->update();

		header(
		'Location: view.php?id=' . $user->getId()
		);
	}
?>
<html>
<head>
	<title>Editar</title>
</head>
<body>

	<form method="POST">
		<label>Name:</label>
			<input type="text" 
				name="name"
				value="<?php echo $user->getName();?>" /><br />
		<label>Email:</label>
			<input type="text"
				name="email"
				value="<?php echo $user->getEmail();?>" /><br />

		<input type="submit" value="Editar" />
	</form>

</body>
</html>