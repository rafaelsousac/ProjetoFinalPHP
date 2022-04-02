<?php

$conexao = mysql_connect("localhost:3306","root","root");
$db = mysql_select_db("db_produto");
$id_novo = $_POST['id_novo'];
$id_produto_novo = $_POST['id_produto_novo'];
$categoria_novo = $_POST["categoria_novo"];
$nome_novo = $_POST['titulo_novo'];
$quantidade_novo  = $_POST['quantidade_novo'];

$sql = "UPDATE estoque SET id='$id_novo', id_produto = '$id_produto_novo', categoria='$categoria_novo', nome='$nome_novo'
, quantidade='$quantidade_novo' WHERE id = '$id_novo'";

$resultado = mysql_query($sql)
or die ("Não foi possível realizar a alteração no banco de dados");
header('Location: consulta_estoque.php');
?>

