function ValidaCampos()
{
	var categoria = window.document.getElementById("txtCategoria");
	if(categoria.value == "Escolha:")
	{
		alert('Selecione uma categoria');
		return false;
	}
	
	var titulo = window.document.getElementById("txtTitulo");
	if(titulo.value.length < 5)
	{
		alert("O t�tulo deve possuir no m�nimo 5 caracteres");
		return false;
	}
	
	var preco = window.document.getElementById("txtPreco");
	if(preco.value <= 0 || preco.length == 0)
	{
		alert("O pre�o n�o pode ser nulo");
		return false;
	}
	alert("Cadastrado com sucesso");
}

	
	