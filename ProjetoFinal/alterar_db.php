<?php

$conexao = mysql_connect("localhost:3306","root","root");
$db = mysql_select_db("db_produto");
$id_novo = $_POST['id_novo'];
$categoria_novo = $_POST["categoria_novo"];
$titulo_novo = $_POST['titulo_novo'];
$descricao_novo= $_POST['descricao_novo'];
$data_validade_novo = $_POST['data_validade_novo'];
$preco_novo  = $_POST['preco_novo'];

$sql = "UPDATE produto SET id='$id_novo',categoria='$categoria_novo', titulo='$titulo_novo'
,descricao='$descricao_novo',data_validade='$data_validade_novo',
preco='$preco_novo' WHERE id = '$id_novo'";

$resultado = mysql_query($sql)
or die ("Não foi possível realizar a alteração no banco de dados");
header('Location: consulta.php');
?>


