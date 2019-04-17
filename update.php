<?php

 $mysqli = new mysqli('localhost', 'root', 'root', 'crud') or die(mysqli_error($mysqli));


mysqli_select_db($mysqli, 'cliente');


if(isset($_POST['update'])){
	$nome = $_POST['nome'];
	$cpf = $_POST['cpf'];

	$id = $_POST['id'];

	$sql = "UPDATE cliente  SET nome = '$nome', cpf = '$cpf' WHERE id = $id'";

endif;

 ?>