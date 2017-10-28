s<?php
require_once ('../Model/Service/ConexaoDB.php');
require_once ('../Model/ModelVO/ParceiroExterno.php');
require_once ('../Model/ModelDAO/ParceiroExternoDAO.php');

    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['method'])) { // aqui é onde vai decorrer a chamada se houver um       *request* POST
        $method = $_POST['method'];
        $controler = new ParceiroController();
        if(method_exists($controler, $method)) {
            $controler->$method($_POST);
        } else {
            echo 'Metodo incorreto';
        }
    }

class ParceiroController {

    //$this->Mensagem = "";

    public function insere() {

        $parceiro = new ParceiroExterno("Badeco", "Marcos", "TI", "Gerencia", "tipo 1");
        $parceiro->setContato("badeco@email.com", "1234-5678");
        $parceiro->setEndereco("Principal", "123", "Pirapitinga", "nada", "Ituiutaba", "13245-234", "MG");

        $parceiroDao = new ParceiroExternoDAO();
        $parceiroDao->inserir($parceiro);

        /*if (!empty($_POST) AND (!empty($_POST['email']) AND !empty($_POST['senha']) AND !empty($_POST['confirmaSenha']) AND ($_POST['tipoUsuario'] != "Selecione")))
            {
                $nome = $_POST['nome'];
                $email = $_POST['email'];
                $telefone = $_POST['telefone'];
                $cpf = $_POST['cpf'];
                $senha = $_POST['senha'];
                $confirmaSenha = $_POST['confirmaSenha'];
                $tipoUsuario = $_POST['tipoUsuario'];

                $usuario = new Usuario($nome, $cpf, $senha, $tipoUsuario, "ativo");
                $usuario->setContato($email, $telefone);
        
                $usuarioDao = new UsuarioDao();
                $usuarioDao->inserir($usuario);
            }/*

        /*try
        {
            if (!empty($_POST) AND (!empty($_POST['email']) AND !empty($_POST['senha']) AND !empty($_POST['confirmaSenha']) AND ($_POST['tipoUsuario'] != "Selecione")))
            {
                $nome = $_POST['nome'];
                $email = $_POST['email'];
                $cpf = $_POST['cpf'];
                //$login = $_POST['login'];
                $senha = $_POST['senha'];
                $confirmaSenha = $_POST['confirmaSenha'];
                $tipoUsuario = $_POST['tipoUsuario'];

                $usuario = new Usuario($nome, $email, $cpf, $senha, $tipoUsuario, 'ativo');
                $usuarioDao = new UsuarioDao();

                // VERIFICA PELO CPF SE JÁ NÃO POSSUI UM USUÁRIO CADASTRADO NO DB \\
                $usuarioDao->consultar("SELECT * FROM usuario WHERE cpf = '$cpf'");
                $linha = $usuarioDao->Verifica;
                $rs = $usuarioDao->Result;

                $validacao = new Validacoes();
                
                if ($linha == 0) {
                    if ($validacao->validaCPF($cpf)) {
                        if ($senha == $confirmaSenha)
                        {
                            $usuarioDao->inserir($usuario);
                            $this->Mensagem = "Usuário cadastrado com sucesso!";
                            echo "<script>
                                    alert('Cadastrado com Sucesso!');
                                    
                                 </script>";
                            echo '<script>window.location="../View/Area_De_Trabalho.php?pagina=cadAcesso";</script>';
                            //header("Location:../View/Cadastro_Acesso.php");
                        }
                        else
                        {
                            $this->Mensagem = "Senhas não conferem!";
                            echo "<script>
                                alert('Senhas não Conferem!');
                                history.back();
                            </script>";
                        }
                    }else{
                        echo "<script>
                            alert('CPF Inválido!');
                            history.back();
                        </script>";
                    }
                }else{
                    $this->Mensagem = "Usuário já existe!";
                    echo "<script>
                        alert('Usuário já existe!');
                        history.back();
                     </script>";
                }
            }
        } catch (Exception $e) {
            echo "Erro: $e";
        }*/

        //return $mensagem;
    }

// ------------------- //
}

?>
