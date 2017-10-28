<?php
require_once ('../Model/Service/ConexaoDB.php');
require_once ('../Model/ModelVO/Usuario.php');
require_once ('../Model/ModelDAO/UsuarioDao.php');
require_once ('../Model/ModelDAO/Validacoes.php');
require_once ('../Controller/LoginController.php');


    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['method'])) { // aqui é onde vai decorrer a chamada se houver um       *request* POST
        $method = $_POST['method'];
        $controler = new UsuarioController();
        if(method_exists($controler, $method)) {
            $controler->$method($_POST);
        } else {
            echo 'Metodo incorreto';
        }
    }

class UsuarioController {

    //$this->Mensagem = "";

    public function insere() {
        //$this->Mensagem = "";

        try
        {
            if (!empty($_POST) AND (!empty($_POST['email']) AND !empty($_POST['senha']) AND !empty($_POST['confirmaSenha']) AND ($_POST['tipoUsuario'] != "Selecione")))
            {
                $nome = $_POST['nome'];
                $email = $_POST['email'];
                $cpf = $_POST['cpf'];
                $area_departamento = $_POST['area_departamento'];
                $formacao_academica = $_POST['formacao_academica'];
                $carga_horaria = $_POST['carga_horaria'];
                $telefone = $_POST['telefone'];
                $senha = $_POST['senha'];
                $confirmaSenha = $_POST['confirmaSenha'];
                $tipoUsuario = $_POST['tipoUsuario'];
                $coordenacao = $_POST['coordenacao'];

                $usuario = new Usuario($nome, $cpf, $formacao_academica, $area_departamento, $carga_horaria,$coordenacao, $senha, $tipoUsuario,"ativo");
                $usuario->setContato($email, $telefone);

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
                            //header("Location:../View/Cadastro_Acesso.php");window.history.go(-2);
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
        }

        //return $mensagem;
    }

    public function insereSemLogar() {
        try
        {
            if (!empty($_POST) AND (!empty($_POST['email']) AND !empty($_POST['senha']) AND !empty($_POST['confirmaSenha']) AND ($_POST['tipoUsuario'] != "Selecione")))
            {
                $nome = $_POST['nome'];
                $email = $_POST['email'];
                $cpf = $_POST['cpf'];
                $area_departamento = $_POST['area_departamento'];
                $formacao_academica = $_POST['formacao_academica'];
                $carga_horaria = $_POST['carga_horaria'];
                $telefone = $_POST['telefone'];
                $senha = $_POST['senha'];
                $confirmaSenha = $_POST['confirmaSenha'];
                $tipoUsuario = $_POST['tipoUsuario'];
                //$coordenacao = $_POST['coordenacao'];

                $usuario = new Usuario($nome, $cpf, $formacao_academica, $area_departamento, $carga_horaria, "sim", $senha, $tipoUsuario,"ativo");
                $usuario->setContato($email, $telefone);

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
                                    window.history.go(-2);
                                 </script>";
                            //echo '<script>window.location="../View/Area_De_Trabalho.php?pagina=cadAcesso";</script>';
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
        }
    }


    public function Processo($Processo) {
        //$this->Mensagem = "";

        switch ($Processo) {
            
            case 'editar':
                global $linha;
                global $rs;
                
                $usuarioDao = new UsuarioDao();

                //$usuarioDao->consultar("SELECT * FROM usuario WHERE idusuario = ".$_GET['id']);
                $usuarioDao->consultar("SELECT * FROM usuario INNER JOIN contato ON usuario.idcontato=contato.idcontato WHERE idusuario = ".$_GET['id']);

                $linha = $usuarioDao->Linha;
                $rs = $usuarioDao->Result;

                if (isset($_POST['botao'])) {
                    $nome = $_POST['nome'];
                    $email = $_POST['email'];
                    $cpf = $_POST['cpf'];
                    $area_departamento = $_POST['area_departamento'];
                    $formacao_academica = $_POST['formacao_academica'];
                    $carga_horaria = $_POST['carga_horaria'];
                    $telefone = $_POST['telefone'];
                    $senha = $_POST['senha'];
                    //$confirmaSenha = $_POST['confirmaSenha'];
                    $tipoUsuario = $_POST['tipoUsuario'];

                    // VERIFICA PELO CPF SE JÁ NÃO POSSUI UM USUÁRIO CADASTRADO NO DB \\
                    $usuarioDao->consultar("SELECT * FROM usuario INNER JOIN contato ON usuario.idcontato=contato.idcontato WHERE cpf = '$cpf' AND idusuario != ".$_GET['id']);

                    $editaLinha = $usuarioDao->Verifica;
                    $editaRs = $usuarioDao->Result;

                    $validacao = new Validacoes();
                    
                    if ($editaLinha == 0) {
                        if ($validacao->validaCPF($cpf)) {
                            $usuarioDao->alterar($nome, $cpf, $formacao_academica, $area_departamento, $carga_horaria, $senha, $tipoUsuario, $email, $telefone, $_GET['id']);
                            echo '<script>alert("Alterado com sucesso !");</script>';
                            echo '<script>window.location="../View/Area_De_Trabalho.php?pagina=consultaUser";</script>';
                        }else{
                            echo '<script>alert("CPF inválido!");</script>';
                            echo '<script>window.location="../View/Editar_Usuarios.php?id='.$_GET["id"].';</script>';
                        }
                    }else{
                        echo '<script>alert("ERRO: Outro usuário possui este CPF!");</script>';
                        echo '<script>window.location="../View/Editar_Usuarios.php?id='.$_GET["id"].';</script>';
                    }
                }
                break;
        }
    }

    public function logar()
    {
        try
        {
            $login = $_POST["login"];
            $senha = $_POST["senha"];
            $login_escape = addslashes($login);
            $senha_escape = addslashes($senha);

            //$conexao = new ConexaoDB();
            $usuarioLogin = new LoginController();
            $permissao = $usuarioLogin->verificaPermissao($login_escape, $senha_escape);

            switch ($permissao)
            {
                case 'Administrador':
                    header("Location:../View/Area_De_Trabalho.php");
                    break;

                case 'Aluno':
                    header("Location:../View/Tela_Usuario.php");
                    /*echo "<script type='text/javascript'>

                    alert('Aluno!!');

                    window.location='../View/index.php';

                   </script>";
                    break;*/

                case 'Professor':
                    header("Location:../View/Tela_Usuario.php");
                    /*echo "<script type='text/javascript'>

                    alert('Professor!!');

                    window.location='../View/index.php';

                   </script>";*/
                    break;

                case 'Parceiro Externo':
                    header("Location:../View/Tela_Usuario.php");
                    /*echo "<script type='text/javascript'>

                    alert('Parceiro Externo!!');

                    window.location='../View/index.php';

                   </script>";*/
                    break;

                case 'Tecnico Administrativo':
                    header("Location:../View/Tela_Usuario.php");
                    /*echo "<script type='text/javascript'>

                    alert('Parceiro Externo!!');

                    window.location='../View/index.php';

                   </script>";*/
                    break;
                case 'Coordenador':
                    header("Location:../View/Area_Coordenador.php");
                    break;

                case 'Empty':
                    echo "<script type='text/javascript'>

                    alert('Seu cadastro não foi encontrado em nossa base de dados! | $login |');

                    history.back();

                   </script>";
                    break;
                default:
                    echo "<script type='text/javascript'>

                    alert('Impossível Acessar!');

                    window.location='../View/index.php';

                   </script>";
            }
        } catch (Exception $e) {
            echo "Erro: $e";
        }
    }


// ------------------- //
}

?>
