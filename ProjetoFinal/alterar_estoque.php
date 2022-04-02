<html>
	<head>
		<title> Alterar Produto </title>
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<link rel="stylesheet" type="text/css" href="estilo2.css">
		<script language = "JavaScript" src = "verificar1.js"> </script>
	</head>
	<body>
		<?php
		include('menu.php');
		$conexao = mysql_connect("localhost:3306", "root", "root");
		$db = mysql_select_db("db_produto");
		$id = $_GET['id'];
		$sql = "SELECT * FROM estoque WHERE id = '$id'";
		$resultado = mysql_query($sql)
		or die("Não foi possível realizar a exclusão dos dados.");
		$num = mysql_num_rows($resultado);

		while($linha=mysql_fetch_array($resultado))
		{
			$id = $linha["id"];
			$id_produto = $linha["id_produto"];
			$categoria = $linha["categoria"];
			$nome = $linha["nome"];
			$quantidade = $linha["quantidade"];
	
			
			echo "<center> <h1 id='titulo'> Alterar Produto no Estoque </h1> </center>";
			echo "<form action='alterar_estoque_db.php?id = $id' method = 'post' onsubmit = 'return ValidaCampos()';>";
			echo "<center>";
			echo "<fieldset class = 'grupo'>";
			echo "<input name ='id_novo' type='hidden' readonly style='background-color:transparent' value='$id' size = 10>";
			echo "<div class = 'campo'>";
			echo "<br>";
			echo "<label> ID Produto: </label>";
			echo "<input name ='id_produto_novo' type='text' readonly style='background-color:transparent' value='$id' size = 10>";
			echo "</div>";
			echo "<div class = 'campo'>";
			echo "<label> Categoria: </label>";
			echo "<select name = 'categoria_novo' id = 'txtCategoria' onfocus='this.initialSelect = this.selectedIndex;' onchange='this.selectedIndex = this.initialSelect;'>
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
			echo "<label> Título: </label>";
			echo "<input name = 'titulo_novo' type = 'text' id = 'txtTitulo' readonly style='background-color:transparent' value = '$nome' size = 43>";
			echo "</div>";
			echo "<div class = 'campo'>";
			echo "<label> Quantidade: </label>"; 
			echo "<input name = 'quantidade_novo' type = 'text' id = 'txtQuantidade' size = 5 value = '$quantidade'>";
			echo "</div>";
			echo "<br>";
			echo "<input type='submit' value='Alterar' class = 'button1'>";
			echo "</fieldset>";
			echo "</center>";
			echo "</form>";
		}
		mysql_close($conexao);
?>
	</body>
</html>

