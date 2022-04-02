<?php
$id_produto = $_POST["id_novo"];
$categoria = $_POST["categoria_novo"];
$titulo = $_POST["titulo_novo"];
$quantidade = $_POST["quantidade_novo"];


$sql = "insert into estoque(id_produto, categoria, nome, quantidade) values ('$id_produto', '$categoria', '$titulo', '$quantidade')";

$conexao = mysql_connect("localhost:3306", "root", "root")
or die("Configuração de Banco de Dados Errada!");

mysql_select_db("db_produto")
or die("Banco de Dados não existe!");

$sql = mysql_query($sql)
or die("Erro ao gravar os dados, verifique");

header('Location: index.php');
mysql_close($conexao);

?>
