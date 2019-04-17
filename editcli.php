<?php
//chama o arquivo de conexão com o bd
include('process.php');
 
// declaração de variáveis
$id = '';
$nome = '';
$cpf = '';
 
$up = mysql_query("UPDATE cliente SET nome ='$nome', cpf ='$cpf' WHERE id=$id");
 
if(mysql_affected_rows() > 0){
  echo "Sucesso: Atualizado corretamente!";
}else{
  echo "Aviso: Não foi atualizado!";
}
 
mysql_close($mysqli);
?>