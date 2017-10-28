$(document).ready(function()
{
 	var url_atual = window.location.href;
	var parametrosDaUrl = url_atual.split("?pagina=")[1];

	if (parametrosDaUrl == "cadAcesso") {
		$("#conteudo").load("Cadastro_Usuarios_Admin.php");
	}
	else if(parametrosDaUrl == "consultaUser"){
		$("#conteudo").load("Consulta_Usuarios.php");
	}
	else if(parametrosDaUrl == "cadEdital"){
		$("#conteudo").load("Cadastro_Editais.php");
	}
	else if(parametrosDaUrl == "consultaEdital"){
		$("#conteudo").load("Consulta_Edital_Admin.php");
	}
	else{
		$("#conteudo").load("Welcome.php");
	}
});