<!DOCTYPE html>
	<?php  require_once 'process.php'; ?>
<html>
<head>
	<title>Editar Cliente</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="js/bootstrap.min.js"> </script>

</head>
<body>



	<div class="container">



		<h1 align="center"> Editar Cliente</h1>
	<div class="row justify-content-center">
<form action ="cliente.php" method="POST">
	<input type="hidden" name="id"  value="<?php  echo $id; ?>">
	<div class="form-group">
	<label>Nome</label>
		<input type="text" name="nome"
		 value="<?php echo $nome; ?>" class="form-control" placeholder="Entre com seu nome">
	</div>
	<div class="form-group">
		<label>CPF</label>
		<input type="text" name="cpf"
		 value="<?php echo $cpf; ?>" class="form-control" placeholder="Digite seu CPF">
	</div>
	<div class="form-group">
			<button type="Enviar" class="btn btn-info" name="update">Atualizar</button>
		
		
	</div>
	</form>
</div>
</div>

</body>
</html>