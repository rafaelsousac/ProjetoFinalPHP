<?php

$conexao = mysql_connect("localhost:3306", "root", "root");
$db = mysql_select_db("db_produto");
$id = $_GET['id'];
$sql = "UPDATE estoque set quantidade = quantidade - 1 WHERE id='$id'";
$resultado = mysql_query($sql)
or die("N�o foi poss�vel realizar a exclus�o dos dados.");
mysql_close($conexao);
header('Location: consulta_estoque.php');
?>
