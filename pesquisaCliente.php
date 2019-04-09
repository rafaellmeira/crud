<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Buscar Cliente</title>
</head>
 
<body>
	<h2>Pesquisar Cliente</h2>
<form name="frmBusca" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>?a=buscar" >
    <input type="text" name="palavra" />
    <input type="submit" value="Buscar" />
</form>
 
<?php
	$palavra = ($_POST['palavra']);

	$mysqli = new mysqli('localhost', 'root', 'root', 'crud') or die(mysqli_error($mysqli));
		$result = $mysqli->query("SELECT * FROM cliente") or die($mysqli->error);
		//pre_r($result);

	$sql = mysql_query("SELECT * FROM produtos WHERE Nome LIKE '%".$palavra."%'");
	$row = mysql_num_rows($sql);
	if($row > 0) {
		while($linha = mysql_fetch_array ($sql)) {
			$id = $linha['id'];
			$nome = $linha['Nome'];
			$CPF = $linha['CPF'];
		
			echo "<strong>id: </strong> .$id";
			echo "<br /><br />";
			echo "<strong>Cliente: </strong> .$nome";
			echo "<br /><br />";
			echo "<strong>CPF: </strong> .$CPF";
			echo "<br /><br />";

		}
	} else {
		echo "Desculpe, Nenhum resultado encontrado!";

	}
?>
</body>
</html>