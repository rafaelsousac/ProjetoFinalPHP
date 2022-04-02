<html>
	<head>
		<title> Estoque </title>
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="stylesheet" type="text/css" href="estilo.css">
	</head>
<body>
<?php
include('menu.php');
echo "<title> Consulta Estoque </title>";
$conexao = mysql_connect("localhost:3306", "root", "root");
$db = mysql_select_db("db_produto");
$sql = "select * from estoque ORDER BY id ASC";
$resultado = mysql_query($sql)

or die("Não foi possível realizar a consulta ao banco de dados");

//$id_alterar = $_GET['id'];
//$str_qtd = "txtQtd$id";
//$qtd = $_POST["txtQtd$id_alterar"];
//$sql1 = "UPDATE estoque SET quantidade = $qtd WHERE id = '$id_alterar'";
//echo "$sql1";

echo "<center> <h1> Estoque </h1> </center> <br>";
echo "<center>";
echo "<table id = tabela-consulta align = 'center'>";
echo "<thead>";
echo "<tr>";
echo "<th width = 5> ID </th>";
echo "<th width = 5> ID Produto </th>";
echo "<th width = 20> Categoria </th>";
echo "<th width = 40> Produto </th>";
echo "<th width = 10> Quantidade </th>";
echo "<th width = 50> Alterar </th>";
echo "<th width = 50> Venda </th>";
echo "</center>";
echo "</thead>";
echo "</tr>";


while($linha = mysql_fetch_array($resultado))
{
	$id = $linha["id"];
	$id_produto = $linha["id_produto"];
	$categoria = $linha["categoria"];
	$nome = $linha["nome"];
	$quantidade = $linha["quantidade"];
	
	echo "<tbody>";
	echo "<tr>";
	echo "<th width = 5> $id </th>";
	echo "<th width = 5> $id_produto </th>";
	echo "<th width = 20> $categoria </th>";
	echo "<th width = 40> $nome </th>";
	echo "<th width = 40> $quantidade </th>";
	echo "<th width = 50> <a href='alterar_estoque.php?id=$id'> Alterar </a> ";
	//echo "<th width = 50> <input type='text' size = 5 value = '$quantidade' name = txtQtd$id> <a href='consulta_estoque.php?id=$id> Alterar </a> ";
	echo "<th width = 50> <a href='venda.php?id=$id'> OK </th>";
	echo "</tbody>";
	echo "</tr>";
	echo "<br>";
}
echo "</table>";
echo "<br>";
?>
</html>

