<!DOCTYPE html>
<html>
<head>
	<title> Mostrando Cliente</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="js/bootstrap.min.js"> </script>
 </head>
<body>
	<div class="container">
<p><a href="pesquisarCliente2.php">Pesquisar outro cliente<br></a>
<?php 

$nomeproc = $_POST['palavra'];
if (!$nomeproc)

 {echo "Volte atrás e digite um nome<hr>";}

echo "<p>Nome procurado: <strong> $nomeproc </strong> 	</p>";

$mysqli = new mysqli('localhost', 'root', 'root', 'crud') or die(mysqli_error($mysqli));

if (!$mysqli){
	echo "<p> Falha na ligação."; exit; }
mysqli_select_db($mysqli, 'cliente');
$procura = ("SELECT * FROM cliente WHERE nome LIKE '%$nomeproc%'");

$result = mysqli_query($mysqli, $procura);
$nregistos = mysqli_num_rows($result);
echo "Nº de registos encontrados: $nregistos";
?>
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
		</div>

<?php
for ($i=0; $i <$nregistos; $i++) {
 $registo = mysqli_fetch_assoc($result);
 echo '<tr> <td>' .$registo['id']. '</td>';
 echo '<td>' .$registo['nome']. '</td>';
 echo '<td>' .$registo['cpf']. '<td> </tr>'; }

 ?>

</div>
</body>

</html>
