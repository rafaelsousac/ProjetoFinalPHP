<html>
	<head>
		<title> Alterar Produto </title>
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<link rel="stylesheet" type="text/css" href="estilo2.css">
		<script language = "JavaScript" src = "verificar.js"> </script>
	</head>
	<body>
		<?php
		include('menu.php');
		$conexao = mysql_connect("localhost:3306", "root", "root");
		$db = mysql_select_db("db_produto");
		$id = $_GET['id'];
		$sql = "SELECT * FROM produto WHERE id = '$id'";
		$resultado = mysql_query($sql)
		or die("Não foi possível realizar a exclusão dos dados.");
		$num = mysql_num_rows($resultado);

		while($linha=mysql_fetch_array($resultado))
		{
			$id = $linha["id"];
			$categoria = $linha["categoria"];
			$titulo = $linha["titulo"];
			$descricao = $linha["descricao"];
			$data_validade = $linha["data_validade"];
			$preco = $linha["preco"];
	
			
			echo "<center> <h1 id = 'titulo'> Alterar Cadastro do Produto </h1> </center>";
			echo "<form action='alterar_db.php?id = $id' method = 'post' onsubmit = 'return ValidaCampos()';>";
			echo "<center>";
			echo "<fieldset class = 'grupo'>";
			echo "<input name ='id_novo' type='hidden' value='$id' size = 10>";
			echo "<div class = 'campo'>";
			echo "<br>";
			echo "<label> Categoria: <label>";
			echo "<select name = 'categoria_novo' value = 'Teste' id = 'txtCategoria'> 
							<option value = '$categoria'> $categoria </option>
							<option value = 'Alimentos'> Alimentos </option>
							<option value = 'Aúdio'> Aúdio </option>
							<option value = 'Bebidas'> Bebidas </option>
							<option value = 'Eletrodomésticos'> Eletrodomésticos </option>
							<option value = 'Informática'> Informática </option>
							<option value = 'Jogos'> Jogos </option>
							<option value = 'Telefonia'> Telefonia </option>
							<option value = 'TV e Vídeo'> TV e Vídeo </option>
					 	</select>
				  </div>";
			echo "<div class = 'campo'>";
			echo "<label> Título: </td> </label>";
			echo "<input name = 'titulo_novo' type = 'text' id = 'txtTitulo' value = '$titulo' size = 43>";
			echo "</div>";
			echo "<div class = 'campo'>";
			echo "<label> Descrição: </label>";
			echo "<textarea name = 'descricao_novo' id = 'txtDescricao' rows = 5 cols = 45>$descricao </textarea>";
			echo "</div>";
			echo "<div class = 'campo'>";
			echo "<label> Data de Validade: </label>";
			echo "<input name = 'data_validade_novo' type = 'date' value = '$data_validade' size = 20>";
			echo "</div>";
			echo "<div class = 'campo'>";
			echo "<label> Preço: </label>"; 
			echo "<input name = 'preco_novo' type = 'text' id = 'txtPreco' value = '$preco' size = 5>";
			echo "</div>";
			echo "</br>";
			echo "<input type='submit' value='Alterar' class = 'button1'>";
			echo "</fieldset>";
			echo "</center>";
			echo "</form>";
		}
		mysql_close($conexao);
?>
	</body>
</html>


