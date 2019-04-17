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

<?php 
		if(isset($_GET['id'])):
			$id = mysqli_escape_string($mysqli, $_GET['id']);

			$sql = "SELECT * FROM cliente WHERE id = '$id'";
			$resultado = mysqli_query($mysqli, $sql);
			$dados = mysqli_fetch_array($resultado);

		endif;
	
		?>

	<div class="row justify-content-center">

<form action ="update.php" method="POST">
	<input type="hidden" name="id"  value"<?php  echo $id?>" >
	<div class="form-group">
	<label>Name</label>
		<input type="text" name="nome" value="<?php echo $dados['nome'] ?>" id ="nome" class="form-control" placeholder="Entre com seu nome">
	</div>
	<div class="form-group">
		<label>CPF</label>
		<input type="text" name="cpf" value="<?php echo $dados['cpf'] ?>" id="cpf" class="form-control" placeholder="Digite seu CPF">
	</div>
	<div class="form-group">
		<?php 
		if($update == true):
		
		?>
			<button type="Enviar" class="btn btn-info" name="update">Atualizar</button>
	
		<?php endif; ?>	
	</div>
	</form>
</div>
</div>

</body>
</html>