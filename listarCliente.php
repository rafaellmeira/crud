<!DOCTYPE html>
<html>
<head>
	<title>PHP crud</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="js/bootstrap.min.js"> </script>
</head>
<body>
	<?php  require_once 'process.php'; ?>




	<div class="container">

	


	<div class="row justify-content-center">

<form action ="Cliente.php" method="POST">
	<div class="form-group">
	<label>Name</label>
		<input type="text" name="nome" class="form-control" placeholder="Entre com seu nome">
	</div>
	<div class="form-group">
		<label>CPF</label>
		<input type="text" name="cpf" class="form-control" placeholder="Digite seu CPF">
	</div>
	<div class="form-group">
		<button type="Enviar" class="btn btn-primary" name="save">Salvar</button>
	</div>
	</form>
</div>
</div>

</body>
</html>