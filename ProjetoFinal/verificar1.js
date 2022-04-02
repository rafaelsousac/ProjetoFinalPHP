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
		alert("O título deve possuir no mínimo 5 caracteres");
		return false;
	}
	
	var quantidade = window.document.getElementById("txtQuantidade");
	if(quantidade.value <= 0)
	{
		alert("A quantidade deve ser maior ou igual a 1");
		return false;
	}
	alert("Cadastrado com sucesso");
}

	
	