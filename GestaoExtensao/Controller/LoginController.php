<?php
session_start();

require_once("../Model/Service/ConexaoDB.php");

class LoginController {

    public function verificarLogado(){
        if(!isset($_SESSION["nome"])){
            header("Location: dirname(__FILE__)/../index.php");
            exit();
        }
    }

    public function verificaPaginaAdmin(){
        if ($_SESSION["tipo"] != "Administrador") {
            header("Location: dirname(__FILE__)/../index.php");
            exit();
        }
    }

    public function verificaPaginaCoordenador(){
        if (($_SESSION["coordenacao"] != "sim" && $_SESSION["tipo"] == "Administrador") || ($_SESSION["coordenacao"] == "sim" && $_SESSION["tipo"] == "Administrador")) {
            header("Location: dirname(__FILE__)/../index.php");
            exit();
        }
    }

    // MÉTODO DE VALIDAÇÃO DE LOGIN E PERMISSÕES DOS USUÁRIOS //
    public function verificaPermissao($login, $senha){
        try {
            $usuarioDao = new UsuarioDao();

            $usuarioDao->consultar("SELECT * FROM usuario INNER JOIN contato ON usuario.idcontato=contato.idcontato WHERE (email = '$login' OR cpf = '$login') AND senha = '$senha' AND status = 'ativo'");

            $linhas = $usuarioDao->Verifica;
            $rs = $usuarioDao->Result;


            if($linhas == 0) {
                $permissao = "Empty";
            }
            else {
                $resultado = $rs->fetch_assoc(); // Obtem uma linha do conjunto de resultados como uma matriz
                $_SESSION["nome"] = $resultado["nome"];
                $_SESSION["tipo"] = $resultado['tipo'];
                $_SESSION["coordenacao"] = $resultado["coordenacao"];

                if ($resultado["coordenacao"] == "sim") {
                    $permissao = "Coordenador";
                }else{
                    
                    $permissao = $resultado['tipo'];
                }
            }

            
        } catch (Exception $e) {
            echo "Erro: $e";
        }

        return $permissao;
    }

    public function getDadosUser($opc){
        switch ($opc) {
            case 'nome':
                return $_SESSION["nome"];
                break;
            case 'tipo_usuario':
                return $_SESSION["tipo"];
                break;
            default:
                echo "Erro nos dados da Sessão!";
                break;
        }
        
    }

    public function deslogar(){
        session_destroy();
        header("Location: ../View/index.php");
    }

}

?>
