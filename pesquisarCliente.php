<html>
<head>


<div class="container">
 <title> Pesquisar Clientes </title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="js/bootstrap.min.js"> </script>

 </head>
<body> 
<h2> Pesquisar Clientes </h2> 

<form action="" method="post">
<input type="text" name="palavra" />
<input type="submit" Value="Buscar" />
</form>
</div>
<?php  require_once 'process.php'; ?>
<div class="container">



<?php
	$busca = $_POST['palavra'];// palavra que o usuario digitou
	echo $busca;
	$busca_query = mysql_query("SELECT * FROM cliente WHERE nome LIKE '%$busca%'")or die(mysql_error());//faz a busca com as palavras enviadas
	echo $busca_query;

	if (empty($busca_query)) { //Se nao achar nada, lança essa mensagem
    echo "Nenhum registro encontrado.";
}

// quando existir algo em '$busca_query' ele realizará o script abaixo.
while ($dados = mysql_fetch_array($busca_query)) {
    echo "Id do Cliente: $dados[id]<br />"; 
    echo "Nome do Cliente: $dados[nome]<br />";
    echo "CPF do Cliente: $dados[CPF] <br />";
    echo "<hr>";
}
?>

<p> <a href="cliente.php"> Listar registos </a>

</body>

</html>