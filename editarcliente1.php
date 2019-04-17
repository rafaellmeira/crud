<?php

<?php $mysqli = new mysqli('localhost', 'root', 'root', 'crud') or die(mysqli_error($mysqli));
?>
		
<?php

$id = $_GET['id'];

$busca = mysql_query("SELECT * FROM tabela WHERE id = $id"); 
$row = mysql_fetch_arrow($busca);

?>

<form method="POST" action="salvar.php">

<input type="text" value="<?php echo $row['campo']; ?>" name="campo" />
<input type="hidden" value="<?php echo $id; ?>" name="id" />

<input type="submit" value="edit" />

</form