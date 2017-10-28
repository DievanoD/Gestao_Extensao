$(document).ready(function()
{
 	var url_atual = window.location.href;
	var parametrosDaUrl = url_atual.split("?pagina=")[1];

	if (parametrosDaUrl == "cadAcesso") {
		$("#conteudo").load("Cadastro_Usuarios_Admin.php");
	}
});