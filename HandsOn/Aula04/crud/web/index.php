<html>
<head>
	<title>Listar</title>
</head>
<body>
	<a href="criar.php">Criar</a>

	<?php
		require __DIR__
			. DIRECTORY_SEPARATOR
			. '..'
			. DIRECTORY_SEPARATOR
			. 'bootstrap.php';

		$user = new Entity\User;
		$users = $user->getAll();
	?>

	<p>
      <table>
	    <thead>
	      <tr>
	        <th>ID</th>
	        <th>Name</th>
	        <th>Email</th>
	        <th>Ações</th>
	      </tr>
	    </thead>
	    <tbody>
	    <?php
	      if (!count($users)) {
	        echo '<tr><td colspan="4">Nenhum Usuário</td></tr>';
	      } else {
	      	foreach ($users as $user) {
  		?>
  		  <tr>
  		    <td><?php echo $user->getId(); ?></td>
  		    <td><?php echo $user->getName(); ?></td>
  		    <td><?php echo $user->getEmail(); ?></td>
  		    <td></td>
  		  </tr>
  		<?php
	      	}
	      }
	    ?>
	    </tbody>
      </table>
	</p>
</body>
</html>