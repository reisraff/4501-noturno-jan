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

	if ($user->delete()) {
?>
<html>
<head>
	<title>Deletar</title>

	<script type="javascript">
		alert('Usuário foi deletado!');
		location.href='index.php';
	</script>
</head>
</html>
<?php
	} else {
		echo '
Usuário não foi deletado<br />
<a href="index.php">Voltar</a>
';
	}
?>