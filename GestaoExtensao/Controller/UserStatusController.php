<?php
require_once ('../Model/Service/ConexaoDB.php');
require_once ('../Model/ModelDAO/UsuarioDao.php');

$usuarioDao = new UsuarioDao();

	if ($_GET['acao'] == "Inativar") {
        $usuarioDao->mudaStatus($_GET['id'], "inativo");
        //echo '<script>alert("Usuário foi Inativado!");</script>';
        echo '<script>window.location="../View/Area_De_Trabalho.php?pagina=consultaUser";</script>';
    }else if ($_GET['acao'] == "Ativar") {
        $usuarioDao->mudaStatus($_GET['id'], "ativo");
        //echo '<script>alert("Usuário foi Ativado!");</script>';
        echo '<script>window.location="../View/Area_De_Trabalho.php?pagina=consultaUser";</script>';
    }

?>