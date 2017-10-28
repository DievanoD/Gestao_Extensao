<?php
require_once ('../Controller/LoginController.php');
$ObjLogin = new LoginController ();

$ObjLogin->verificarLogado ();
$ObjLogin->verificaPaginaAdmin();
?>

<!DOCTYPE html>

<html>
<head>
<title>Consulta de Usuários</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <link href="../css/bootstrap.min.css" rel="stylesheet"> -->
<link rel="shortcut icon" href="../View/img/favicon.ico" />
<link href="css/bootstrap-modificado.css" rel="stylesheet">
<link href="css/estilo.css" rel="stylesheet">

<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/searchTable.js" type="text/javascript"></script>

</head>

<body class="CadastroUsuario">
	<br>
	<div class="container">
		<form method="post" action="#" id="form_pesquisa" name="form_pesquisa">
			<div class="row">
				<center>
					<legend>
						<strong>CONSULTA DE USUÁRIOS</strong>
					</legend>

					<div class="input-group col-md-4">
						<span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
						<input type="text" class="form-control" name="pesquisaUsuario" id="pesquisaUsuario" placeholder="Pesquisar Usuário...">

						<p id="ContaResultado"></p>
					</div>
					
				</center>
			</div>
		</form>
		
		<center>
			<div id="contentLoading">
				<div id="loading"></div>
			</div>
		</center>
		</br>

		<div class="row">
			<div id="MostraPesq"></div>
 		</div>
	</div>

	<br>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
	<script src="js/jquery.maskedinput.js" type="text/javascript"></script>
	<script src="js/Validacaoform.js" type="text/javascript"></script>
	<script src="js/script.js" type="text/javascript"></script>

</body>
</html>
