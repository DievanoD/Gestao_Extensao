<!DOCTYPE html>

<html>
<head>
<title>Cadastro de Usuários</title>
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
	<br>
	<div class="container">
		<div id="cadastroAcesso">
			<div class="panel panel-default">
  				<div class="panel-body">
				<div class="page-header alinharTextoCentro">
					<h1>Cadastro de Coordenador</h1>

					<div class="alinharTextoCentro">
						<label id="labelCadastroAcesso"></label>
						<!-- <label class="<?php echo $alerta;?>" id="alerta"> <?php echo $msg;?> </label> -->
					</div>
				</div>
				<div class="">
					<form action="../Controller/UsuarioController.php" method="post" name="FormCadastroAcesso" id="form">
						<input type="hidden" name="method" value="insereSemLogar">
						<div class="row">
							<div id="nome" class="col-md-4">
								<label class="control-label">Nome</label>
								<input type="text" class="form-control" name="nome" placeholder="Nome do Usuário" oninput="ValidarCampoNome()" required>
								<br>
							</div>

							<div id="email" class="col-md-4">
								<label class="control-label">E-mail</label>
								<div class="input-group">
									<span class="input-group-addon">@</span>
									<input type="email" class="form-control" name="email" placeholder="E-mail do Usuário" oninput="ValidarCampoEmail()" required>
								</div>
								<br>
							</div>

							<div id="telefone" class="col-md-4">
								<label class="control-label">Telefone</label>
									<input type="text" class="form-control" name="telefone" maxlength="11" placeholder="Telefone" required>
								<br>
							</div>

							<div class="col-md-4">
								<label class="control-label">CPF</label>
								<input type="text" class="form-control" name="cpf" maxlength="11" placeholder="CPF" required>
								<br>
							</div>

							

							<div id="senha" class="col-md-4">
								<label class="control-label">Senha</label>
								<input type="password" class="form-control" name="senha" placeholder="Senha" oninput="ValidarCampoDeSenha()" required>
								<br>
							</div>

							<div id="confirmaSenha" class="col-md-4">
								<label class="control-label">Confirma Senha</label>
								<input type="password" class="form-control" name="confirmaSenha" placeholder="Confirma Senha" oninput="ValidarCampoDeSenha()" required>
								<br>
							</div>

							<div id="tipoUsuario" class="col-md-4">
								<label class="control-label">Cargo</label>
								<select name="tipoUsuario" class="form-control" onclick="ValidarCombobox()" required>
									<option value="">Selecione</option>
									<option value="Professor">Professor</option>
									<option value="Tecnico Administrativo">Técnico Administrativo</option>
								</select>
							</div>

							<div class="col-md-4">
								<label class="control-label">Departamento</label>
								<input type="text" class="form-control" name="area_departamento" placeholder="Departamento" required>
								<br>
							</div>


							<div class="col-md-4">
								<label class="control-label">Formação Acadêmica</label>
								<input type="text" class="form-control" name="formacao_academica" placeholder="Formação Acadêmica" required>
								<br>
							</div>

							<div class="col-md-4">
								<label class="control-label">Carga Horária</label>
								<input type="text" class="form-control" name="carga_horaria" placeholder="Carga Horária" required>
								<br>
							</div>
						</div>

						<br>
						<div class="row">
							<div class="form-inline alinharTextoCentro">
								<button type="submit" class="btn btn-success">Concluir Cadastro</button>
								<button type="reset" class="btn btn-success">Limpar</button>
								<a href="Consulta_Edital.php" class="btn btn-success" role="button">Cancelar</a>
							</div>
						</div>
					</form>
				</div>
				
				</div>
			</div>
		</div>
	</div>

	<br>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
	<script src="js/Validacaoform.js" type="text/javascript"></script>
	<script src="js/script.js" type="text/javascript"></script>
	<script src="js/jquery.maskedinput.js" type="text/javascript"></script>
</body>
</html>