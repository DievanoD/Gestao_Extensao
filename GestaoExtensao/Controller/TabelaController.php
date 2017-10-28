<?php
require_once ('../Model/Service/ConexaoDB.php');
require_once ('../Model/ModelDAO/UsuarioDao.php');

	//recebemos nosso parâmetro vindo do form
	$parametro = isset($_POST['pesquisaUsuario']) ? $_POST['pesquisaUsuario'] : null;
	$msg = "";

	// Realizamos a pesquisa com o parâmetro no banco
	try {
		$usuarioDao = new UsuarioDao();

		$usuarioDao->consultar("SELECT * FROM usuario INNER JOIN contato ON usuario.idcontato=contato.idcontato WHERE nome LIKE '$parametro%' OR cpf LIKE '$parametro%' ORDER BY nome ASC");
		
		$linha = $usuarioDao->Verifica;
		$resultado = $usuarioDao->Result;

	}catch (Exception $e){
		echo $e->getMessage();
	}

	$msg .= "<div>"; //Abrimos a div da consulta

	$msg .= "<span><center>".$linha." Resultado(s).</center></span>"; // Span para contar os resultados

	$msg .= "<br>";
	
	//começamos a concatenar nossa tabela
	$msg .= "<div class='panel panel-primary'>";

	$msg .= "<div class='panel-heading'><center><b>USUÁRIOS</b></center></div>
		        <div class='table-responsive' style='overflow: auto; max-height: 340px;'>";

	$msg .= "<table class='table table-hover tabela'>";
	$msg .= "	<thead align='center'>";
	$msg .= "		<tr>";
	$msg .= "			<td><b>ID</b></td>";
	$msg .= "			<td><b>NOME</b></td>";
	$msg .= "			<td><b>E-MAIL</b></td>";
	$msg .= "			<td><b>TELEFONE</b></td>";
	$msg .= "			<td><b>CPF</b></td>";
	$msg .= "			<td><b>TIPO</b></td>";
	$msg .= "			<td><b>STATUS</b></td>";
	$msg .= "		</tr>";
	$msg .= "	</thead>";
	$msg .= "	<tbody>";

	//resgata os dados na tabela
	if($linha > 0){
		foreach ($resultado as $res) {

			$msg .= "	<tr align='center'>";
			$msg .= "		<td>".$res['idusuario']."</td>";
			$msg .= "		<td>".$res['nome']."</td>";
			$msg .= "		<td>".$res['email']."</td>";
			$msg .= "		<td>".$res['telefone']."</td>";
			$msg .= "		<td>".$res['cpf']."</td>";
			$msg .= "		<td>".$res['tipo']."</td>";
			$msg .= "		<td>".$res['status']."</td>";


			$msg .=' 		<td> <a href="Editar_Usuarios.php?id='.$res["idusuario"].'"><button type="button" class="btn btn-primary">Editar</button></a>';

			if ($res['tipo'] != "Administrador") {
				if ($res['status'] == "inativo") {
	        		$botao = "btn btn-success";
	        		$acao = "Ativar";
	            }else{
	            	$botao = "btn btn-danger";
	            	$acao = "Inativar";
	            }
	            
				$msg .=' <a href="../Controller/UserStatusController.php?acao='.$acao.'&id='.$res['idusuario'].'"><button type="button" id="botao" class="'.$botao.'">'.$acao.'</button></a>
							</td>
						</tr>';
			}

		}
	}else{
		$msg = "";
		$msg .= "<br>";
		$msg .= "<div class='panel panel-primary'>";

		$msg .= "<div class='panel-heading'><center><b>USUÁRIOS</b></center></div>
		         	<div class='table-responsive' style='overflow: auto; max-height: 350px;'>";
		$msg .= 		"<table class='table table-hover'>";
		$msg .= 			"<thead align='center'>";
		$msg .= 				"<tr align='center'>";
		$msg .= 					"<td>NENHUM RESULTADO FOI ENCONTRADO...</td>";
		$msg .= 				"</tr>";
		$msg .= 			"</thead>";
		$msg .= 		"</table>";
		$msg .= 	"</div>";
		$msg .= "</div>";
	}

	$msg .= "	</tbody>";
	$msg .= "</table>";

	$msg .= "</div>"; // Div da responsividade

	$msg .= "</div>"; //Div do Panel Primary

	$msg .= "</div>"; //Fechamos a div da consulta

	
	//retorna a msg concatenada
	echo $msg;
?>