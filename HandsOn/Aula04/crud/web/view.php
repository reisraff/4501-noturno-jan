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
?>
<html>
<head>
	<title>Visualizar</title>
</head>
<body>
	<a href="index.php">Voltar</a> | 
	<a href="delete.php?id=<?php echo $user->getId(); ?>">Deletar</a> | 
	<a href="editar.php?id=<?php echo $user->getId(); ?>">Editar</a>

	<p>
		<label>Id:</label> <?php echo $user->getId(); ?>
	</p>
	<p>
		<label>Nome:</label> <?php echo $user->getName(); ?>
	</p>
	<p>
		<label>Email:</label> <?php echo $user->getEmail(); ?>
	</p>
</body>
</html>