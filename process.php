<?php 

session_start();

$mysqli = new mysqli('localhost', 'root', 'root', 'crud') or die(mysqli_error($mysqli));


$nome = '';
$cpf = '';


if(isset($_POST['save'])){
	$nome = $_POST['nome'];
	$cpf = $_POST['cpf'];

	$mysqli->query("INSERT INTO cliente(nome, cpf) VALUES('$nome', '$cpf')") or 
		die($mysqli->error);


$_SESSION['mensagem'] = "Registro foi salvo com sucesso!";
$_SESSION['msg_type'] = "sucesso";

header("location: cliente.php");

}

if(isset($_GET['deletar'])){
	$id = $_GET['deletar'];
	$mysqli->query("DELETE FROM cliente WHERE id=$id") or die($mysqli->error());

 

 $_SESSION['mensagem'] = "Registro foi deletado com sucesso!";
$_SESSION['msg_type'] = "danger";


header("location: cliente.php");

}

if(isset($_GET['edit'])){

	$id = $_GET['edit'];
	$result = $mysqli->query("SELECT * FROM cliente WHERE id=$id") or die($mysqli->error());
	if(count($result)==1){
		$row = $result->fetch_array();
		$nome = $row['nome'];
		$cpf = $row['cpf'];
	}
}

 ?>
