<?php
require_once ('../Controller/LoginController.php');

$ObjLogin = new LoginController ();

$ObjLogin->verificarLogado ();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tela de Usuários</title>
	<link rel="shortcut icon" href="../View/img/favicon.ico" />
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/estilo.css" rel="stylesheet">
</head>
<body class="CadastroUsuario">
	<div class="container">
		<br>
		<div class="panel panel-default">
		  <div class="panel-body">
		  	<div class="row">
		  		
		  		<div class="col-sm-10 col-md-11">
		    		<h4>Olá <strong><?php echo $login = $ObjLogin->getDadosUser("nome");?></strong>, Seja Bem Vindo!</h4>
		    	</div>

		    	<div class="col-sm-2 col-md-1">
		  			<a href="../Controller/Logout.php" class="btn btn-success" role="button">Logout</a>
		  		</div>
		    </div>
		  </div>
		</div>

		<div class="alert alert-success" role="alert">
			Sua Permissão é de: <?php echo $login = $ObjLogin->getDadosUser("tipo_usuario");?>
		</div>

		<div class="row">
			<div class="col-sm-3 col-md-4"></div>
		  <div class="col-sm-6 col-md-4">
		    <div class="thumbnail">
		    <?php
		    	$tipo = $ObjLogin->getDadosUser("tipo_usuario");
		    	switch ($tipo) {
		    		case 'Aluno':
		    			echo "<img src='img/aluno-icon.png' alt='...'>";
		    			break;
		    		case 'Professor':
		    			echo "<img src='img/professor-icon.png' alt='...'>";
		    			break;
		    		case 'Parceiro Externo':
		    			echo "<img src='img/parceiro-icon.png' alt='...'>";
		    			break;
		    		case 'Tecnico Administrativo':
		    			echo "<img src='img/administrativo.png' alt='...'>";
		    			break;
		    		default:
		    			echo "<img src='#' alt='...'>";
		    			break;
		    	}
		    ?>
		      <div class="caption">
		      <center>
		        <h3><?php echo $login = $ObjLogin->getDadosUser("nome");?></h3>
		        <h5><?php echo $login = $ObjLogin->getDadosUser("tipo_usuario");?></h5>
		      </center>
		      </div>
		    </div>
		  </div>
		  <div class="col-sm-3 col-md-4"></div>
		</div>

	</div>
</body>
</html>