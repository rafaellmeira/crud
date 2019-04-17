<!DOCTYPE html>
<html>
<head>
	<title>PHP crud</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="js/bootstrap.min.js"> </script>
</head>
<body>
	<?php  require_once 'process.php'; ?>

	<?php 

	if (isset($_SESSION['mensagem'])); ?>

	<div class="alert alert-<?=$_SESSION['msg_type']?>">
		<?php

			echo $_SESSION['mensagem'];
			unset($_SESSION['mensagem']);
		?>
	</div>
<? endif ?>


	<div class="container">

	<?php 

		$mysqli = new mysqli('localhost', 'root', 'root', 'crud') or die(mysqli_error($mysqli));
		$result = $mysqli->query("SELECT * FROM cliente") or die($mysqli->error);
		//pre_r($result);
		?>

<a class="btn btn-primary" href="pesquisarCliente2.php" role="button">Pesquisar Cliente</a>
		<h1 align="center"> Lista de Clientes</h1>

		<div class="row just justify-content-center">
			<table class="table">
				<thead>
					<tr>
						<th>ID</th>
						<th>Nome</th>
						<th>CPF</th>
						<th colspan="2">Action</th>
					</tr>
				</thead>


			<?php
			while ($row = $result->fetch_assoc()): ?>
			<tr>
				<tr>
					<td><?php echo $row['id'];?></td>
					<td><?php echo $row['nome'];?></td>
					<td><?php echo $row['cpf'];?></td>
					<td>
						<a href="editarCliente.php?edit=<?php echo $row['id']; ?>"
							class="btn btn-info">Editar</a>
						<a href="process.php?deletar=<?php echo $row['id']?>"	
							class="btn btn-danger">Deletar</a>

					</td>
				</tr>
			<?php endwhile; ?>
			


			</table>
		</div>


</body>
</html>