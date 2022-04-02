<?php

$conexao = mysql_connect("localhost:3306", "root", "root");
$db = mysql_select_db("db_produto");
$id = $_GET['id'];
$sql = "DELETE FROM estoque WHERE id_produto='$id'";
$sql1 = "DELETE FROM produto WHERE id='$id'";
$resultado = mysql_query($sql);
$resultado = mysql_query($sql1)
or die("Não foi possível realizar a exclusão dos dados.");
echo "<h1> Produto removido com sucesso! </h1>";
mysql_close($conexao);
header('Location: consulta.php');
?>