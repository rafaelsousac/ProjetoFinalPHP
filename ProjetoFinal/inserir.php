<?php
$categoria = $_POST["txtCategoria"];
$titulo = $_POST["txtTitulo"];
$descricao = $_POST["txtDescricao"];
$data_validade = $_POST["txtDataValidade"];
$preco = $_POST["txtPreco"];

$sql = "insert into produto(categoria, titulo, descricao, data_validade, preco) values ('$categoria', '$titulo', '$descricao', '$data_validade', '$preco')";
echo "$sql";

$conexao = mysql_connect("localhost:3306", "root", "root")
or die("Configuração de Banco de Dados Errada!");

mysql_select_db("db_produto")
or die("Banco de Dados não existe!");

$sql = mysql_query($sql)
or die("Erro ao gravar os dados, verifique");

header('Location: index.php');
mysql_close($conexao);

?>
