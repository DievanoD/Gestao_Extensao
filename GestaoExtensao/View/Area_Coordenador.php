<?php
require_once ('../Controller/LoginController.php');

$ObjLogin = new LoginController ();

$ObjLogin->verificarLogado ();
$ObjLogin->verificaPaginaCoordenador();
//$ObjLogin->verificaPagina();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Area Coordenador</title>
	<link rel="shortcut icon" href="../View/img/favicon.ico" />
	<link href="css/bootstrap-modificado.css" rel="stylesheet">
	<link href="css/estilo.css" rel="stylesheet">
</head>

<header>
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed"
				data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
				aria-expanded="false">
				<span class="sr-only">Toggle navigation</span> <span
				class="icon-bar"></span> <span class="icon-bar"></span> <span
				class="icon-bar"></span>
			</button>
			<span class="navbar-brand">Bem vindo <?php echo $login = $ObjLogin->getDadosUser("nome");?>!</span>
		</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown hand">
					<a class="glyphicon glyphicon-list" role="button" data-toggle="dropdown"> Menu</a>
					<ul class="dropdown-menu forAnimate" role="menu">
						<li><a href="{{URL::to('createusuario')}}"></a></li>
						<li><a class="glyphicon glyphicon-file" href="#" style="word-spacing: -8px;"> Meus Editais</a></li>
					</ul>
				</li>

				<li class="dropdown">
					<a class="glyphicon glyphicon-user" role="button" data-toggle="dropdown"> logout</a>
					<ul class="dropdown-menu forAnimate" role="menu">
						<li><a href="{{URL::to('createusuario')}}"></a></li>
						<li><a class="glyphicon glyphicon-off" href="../Controller/Logout.php"> Sair</a></li>
					</ul>
				</li>

			</ul>
		</div>
	</div>
</nav>
</header>

<body class="CadastroUsuario">

	<div class="container">
		<div id="conteudo"></div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/script.js" type="text/javascript"></script>
	<script src="js/jquery.maskedinput.js" type="text/javascript"></script>
	<script src="js/loadPageCoordenador.js" type="text/javascript"></script>
</body>
</html>
