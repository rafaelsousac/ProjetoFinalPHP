<html>
	<head>
		<title> Cadastro de Produto</title>
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<link rel="stylesheet" type="text/css" href="estilo2.css">
		<script language = "JavaScript" src = "verificar.js"> </script>
	</head>
<body>
	<?php 
		include('menu.php');
	?>
	<div>
	<br>
	<center> <h1 id = "titulo"> Sistema de Cadastro de Produtos</h1> </center> <br>
	</div>
	<form action = "inserir.php" method = "post" onsubmit = "return ValidaCampos();">
		<center>
		<fieldset class = "grupo">
		<div class = "campo">
				<label> Categoria: </label>
				 <select name = "txtCategoria" id = "txtCategoria"> 
						<option value = "Escolha:"> Escolha: </option>
						<option value = "Alimentos"> Alimentos </option>
						<option value = "Aúdio"> Aúdio </option>
						<option value = "Bebidas"> Bebidas </option>
						<option value = "Eletrodomésticos"> Eletrodomésticos </option>
						<option value = "Informática"> Informática </option>
						<option value = "Jogos"> Jogos </option>
						<option value = "Telefonia"> Telefonia </option>
						<option value = "TV e Vídeo"> TV e Vídeo </option>
					 </select>
				</div>
			<div class = "campo">
				 <label> Título: </label>
				 <input name = "txtTitulo" type = "text" id = "txtTitulo" size = 43>
			</div>
			<div class = "campo">
				<label> Descrição: </label>	
				<textarea name = "txtDescricao" id = "txtDescricao" rows=5 cols = 45></textarea>
			</div>
			<div class = "campo">
				<label> Data de Validade: </label>
				<input name = "txtDataValidade" type = "date" id = 'txtDataValidade' size = 10>
			</div>
			<div class = "campo"> 
				<label> Preço: </label>
				<input name = "txtPreco" type = "text" id = "txtPreco" size = 7>
			</div>
			<br>
			<center> <input type = "submit" value = "Cadastrar" class = "button1"> </center>
			</fieldset>
			</center>
	</form>
</body>
</html>



