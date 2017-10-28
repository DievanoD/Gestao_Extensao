<?php
require_once('../Controller/UsuarioController.php');
require_once ('../Controller/LoginController.php');

$ObjLogin = new LoginController ();

$ObjLogin->verificarLogado ();
$ObjLogin->verificaPaginaAdmin();

$controller = new UsuarioController();
$controller->Processo('editar');

?>

<!DOCTYPE html>

<html>
<head>
<title>Edição de Usuários</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <link href="../css/bootstrap.min.css" rel="stylesheet"> -->
<link rel="shortcut icon" href="../View/img/favicon.ico" />
<link href="css/bootstrap-modificado.css" rel="stylesheet">
<link href="css/estilo.css" rel="stylesheet">

<script src="js/jquery.js" type="text/javascript"></script>

</head>

<body class="CadastroUsuario">
	<div class="container" style="margin-top:17px;">
		<div id="cadastroAcesso">
			<div class="panel panel-default">
        		<div class="panel-body">
					<div class="page-header alinharTextoCentro">
						<h1>Edição de Usuários</h1>

						<div class="alinharTextoCentro">
							<label id="labelCadastroAcesso"></label>
							<!-- <label class="<?php echo $alerta;?>" id="alerta"> <?php echo $msg;?> </label> -->
						</div>
					</div>

					<div class="col-sm-3"></div>

					<div class="col-sm-6" >
						<form method="post" action="" id="form" name="form">

							<?php while ($row = mysqli_fetch_array($rs)) { ?>

							<div class="row">
								<div id="nome" class="col-md-12">
									<label class="control-label">Nome</label>
									<input type="text" class="form-control" name="nome" placeholder="Nome do Usuário" oninput="ValidarCampoNome()" value="<?php echo $row['nome']; ?>" required>
									<br>
								</div>

								<div class="col-md-6">
									<label class="control-label">CPF</label>
									<input type="text" class="form-control" name="cpf" maxlength="11" placeholder="CPF" value="<?php echo $row['cpf']; ?>" required>
									<br>
								</div>

								<div id="telefone" class="col-md-6">
									<label class="control-label">Telefone</label>
									<input type="text" class="form-control" name="telefone" placeholder="Telefone" value="<?php echo $row['telefone']; ?>" required>
									<br>
								</div>

								<div id="email" class="col-md-12">
									<label class="control-label">E-mail</label>
									<div class="input-group">
										<span class="input-group-addon">@</span>
										<input type="email" class="form-control" name="email" placeholder="E-mail do Usuário" oninput="ValidarCampoEmail()" value="<?php echo $row['email']; ?>" required>
									</div>
									<br>
								</div>

								<div id="senha" class="col-md-6">
									<label class="control-label">Senha</label>
									<input type="password" class="form-control" name="senha" placeholder="Senha" oninput="ValidarCampoDeSenha()" value="<?php echo $row['senha']; ?>" required>
									<br>
								</div>

								<div class="col-md-6">
									<label class="control-label">Carga Horária</label>
									<input type="text" class="form-control" name="carga_horaria" placeholder="Carga Horária" value="<?php echo $row['carga_horaria']; ?>" required>
									<br>
								</div>

								<div class="col-md-6">
									<label class="control-label">Departamento</label>
									<input type="text" class="form-control" name="area_departamento" placeholder="Departamento" value="<?php echo $row['area_departamento']; ?>" required>
									<br>
								</div>


								<div class="col-md-6">
									<label class="control-label">Formação Acadêmica</label>
									<input type="text" class="form-control" name="formacao_academica" placeholder="Formação Acadêmica" value="<?php echo $row['formacao_academica']; ?>" required>
									<br>
								</div>


								<?php 
								if ($row['tipo'] != "Administrador") {
									echo '<div id="tipoUsuario" class="col-md-12">
											<label class="control-label">Tipo</label>
											<select name="tipoUsuario" class="form-control" onclick="" required>
												<option>'.$row["tipo"].'</option>
												<option value="Professor">Professor</option>
												<option value="Tecnico Administrativo">Técnico Administrativo</option>
											</select>
										</div>';
								}else{
									echo '<input type="hidden" name="tipoUsuario" value="Administrador">';
								}
								?>
							</div>

							<?php } ?>

							<br>
							<div class="row">
								<div class="form-inline alinharTextoCentro">
									<a href="Area_De_Trabalho.php?pagina=consultaUser" class="btn btn-success" role="button">Cancelar</a>
									<button type="reset" class="btn btn-success">Restaurar</button>
									<input type="submit" name="botao" id="button" value="Salvar" class="btn btn-success" onclick="validar(document.form);"/>
								</div>
							</div>
						</form>
					</div>

					<div class="col-sm-3"></div>

				</div>
				
			</div>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
	<script src="js/Validacaoform.js" type="text/javascript"></script>
	<script src="js/script.js" type="text/javascript"></script>
	<script src="js/jquery.maskedinput.js" type="text/javascript"></script>
</body>
</html>
