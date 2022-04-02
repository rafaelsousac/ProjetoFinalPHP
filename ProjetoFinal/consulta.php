<html>
	<head>
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="stylesheet" type="text/css" href="estilo.css">
	</head>
<body>
<?php
include('menu.php');
echo "<title> Consulta </title>";
$conexao = mysql_connect("localhost:3306", "root", "root");
$db = mysql_select_db("db_produto");
$sql = "select id, categoria, titulo, descricao, date_format(data_validade, '%d/%m/%Y') data_validade, preco from produto ORDER BY id ASC";
$resultado = mysql_query($sql)
or die("Não foi possível realizar a consulta ao banco de dados");

echo "<center> <h1> Registro de todos os produtos </h1> </center>";
echo "<center>";
echo "<table id = tabela-consulta align = center>";
echo "<thead>";
echo "<tr>";
echo "<th width = 5> ID </th>";
echo "<th width = 20> Categoria </th>";
echo "<th width = 40> Titulo </th>";
echo "<th width = 50> Descrição </th>";
echo "<th width = 15> Data de Validade </th>";
echo "<th width = 10> Preço </th>";
echo "<th width = 50> Alterar </th>";
echo "<th width = 50> Excluir </th>";
echo "<th width = 50> Estoque </th>";
echo "</center>";
echo "</thead>";
echo "</tr>";

while($linha = mysql_fetch_array($resultado))
{
	
	$id = $linha["id"];
	$categoria = $linha["categoria"];
	$titulo = $linha["titulo"];
	$descricao = $linha["descricao"];
	$data_validade = $linha["data_validade"];
	$preco = $linha["preco"];

	echo "<tbody>";
	echo "<tr>";
	echo "<th width = 5> $id </th>";
	echo "<th width = 20> $categoria </th>";
	echo "<th width = 40> $titulo </th>";
	echo "<th width = 50> $descricao </th>";
	echo "<th width = 15> $data_validade </th>";
	echo "<th width = 10> R$ $preco </th>";
	echo "<th width = 50> <a href='alterar.php?id=$id'> Alterar </a> ";
	echo "<th width = 50> <a href='excluir.php?id=$id'> Excluir </th>";
	echo "<th width = 50> <a href='cadastra_estoque.php?id=$id'> Inserir </th>";
	echo "</tbody>";
	echo "</tr>";
	echo "<br>";
}

echo "</table>";
echo "<br>";
?>

</html>

