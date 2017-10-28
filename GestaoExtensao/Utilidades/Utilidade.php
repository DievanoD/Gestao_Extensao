<?php
// require_once('../vendor/phpmailer/phpmailer/PHPMailerAutoload.php');
require_once(__DIR__.'/../vendor/autoload.php');
class Utilidades
{
    public function gerarUsuario($tipoUsuario, $id)
    {
        if("Aluno" == $tipoUsuario)
        {
            return "Alu" . date('Y') . "_" . $id;
        }

        else if("Professor" ==  $tipoUsuario)
        {
            return "Prof" . date('Y') . "_" . $id;
        }

        else if("ParceiroExterno" ==  $tipoUsuario)
        {
            return "parEx" . date('Y') . "_" . $id;
        }
    }

    public function gerarSenha()
    {
        $caracteresNumericos = "0123456789";
        $caracteresMinusculos = "abcdefghijklmnopqrstuvwxyz";
        $caracteresMaiusculos = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $caracteresAlfanumericos = "!@#$%*?+-";

        //EMBARALHA OS CARACTERES E PEGA APENAS OS 8 PRIMEIROS
        $mistura1 = substr(str_shuffle($caracteresNumericos),0,2);
        $mistura2 = substr(str_shuffle($caracteresMinusculos),0,2);
        $mistura3 = substr(str_shuffle($caracteresMaiusculos),0,2);
        $mistura4 = substr(str_shuffle($caracteresAlfanumericos),0,2);

        $mistura = str_shuffle($mistura1.$mistura2.$mistura3.$mistura4);

        return $mistura;
    }

    public function criptografarSenha($senha)
    {
        // $senhaCriptografada = sha1(md5($senha));
        $senha = 'ola mundo';
        $custo = '08';
        $salt = 'Cf1f11ePArKlBJomM0F6aJ';
        $senhaCriptografada = crypt($senha, '$2a$' . $custo . '$' . $salt . '$');

        return $senhaCriptografada;
    }

    public function enviarEmail($nome, $email, $usuario, $senha)
    {
        $mail = new PHPMailer();
        $mail->IsSMTP(); // Define que a mensagem será SMTP
        $mail->CharSet = 'utf-8';

        // $mail->CharSet = 'iso-8859-1';

        $mail->Host = 'Smtp.gmail.com'; // Endereço do servidor SMTP
        $mail->IsHTML(true);
        $mail->SMTPSecure = 'ssl';
        $mail->SMTPAuth = true; // Usa autenticação SMTP? (opcional)
        $mail->Port = 465;
        $mail->Username = 'ads.gestaoextensao@gmail.com'; // Usuário do servidor SMTP
        $mail->Password = 'extensao2017'; // Senha do servidor SMTP

        // Define o remetente
        // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
        $mail->From = "ads.gestaoextensao@gmail.com"; // Seu e-mail
        $mail->FromName = "Gestor de Extensão"; // Seu nome

        // Define os destinatário(s)
        // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=

        // Define os dados técnicos da Mensagem
        // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
        // $mail->IsHTML(true); // Define que o e-mail será enviado como HTML
        //$mail->CharSet = 'iso-8859-1'; // Charset da mensagem (opcional)

        // Define a mensagem (Texto e Assunto)
        // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=

        $mail->Subject  = "Você já Pode Utilizar o Gestor de Extensão"; // Assunto da mensagem
        $mail->Body = "Olá <b>$nome</b>;<br><br><h2><i>Seja bem vindo ao Gestor de Extensão</i></h2><br>Seu Usuário : <b>$usuario</b>
        <br>Sua Senha : <b>$senha</b><br><br>Clique no link abaixo você será direcionado para a página do
        <b>Gestor de Extensão</b><br><br><a href='www.google.com'>Clique aqui!</a><br><br>Faça bom proveito!";
        //$mail->AltBody = "5° Periodo ADS!";

        // Define os anexos (opcional)
        // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
        //$mail->AddAttachment("c:/temp/documento.pdf", "novo_nome.pdf");  // Insere um anexo
        $mail->AddAddress($email);
        // Envia o e-mail
        $enviado = $mail->Send();
        // // Limpa os destinatários e os anexos
        // // $mail->ClearAllRecipients();
        // // $mail->ClearAttachments();
        //
        // Exibe uma mensagem de resultado
        if ($enviado)
        {
          return true;
        }

        else
        {
          return false;
        }
    }

}
?>
