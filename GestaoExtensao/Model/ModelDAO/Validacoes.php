<?php
class Validacoes
{
    function validaCPF($cpf)
    {
      if(empty($cpf))
      {
        return false;
      }

      $cpf = preg_replace('[^0-9]', '', $cpf);
      $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);

      if (strlen($cpf) != 11)
      {
        return false;
      }

      else if ($cpf == '00000000000' || $cpf == '11111111111' || $cpf == '22222222222' ||
      $cpf == '33333333333' || $cpf == '44444444444' || $cpf == '55555555555' ||
      $cpf == '66666666666' || $cpf == '77777777777' || $cpf == '88888888888' || $cpf == '99999999999')
      {
        return false;
      }

      else
      {

        for ($t = 9; $t < 11; $t++)
        {
          for ($d = 0, $c = 0; $c < $t; $c++)
          {
            $d += $cpf{$c} * (($t + 1) - $c);
          }

          $d = ((10 * $d) % 11) % 10;

          if ($cpf{$c} != $d)
          {
            return false;
          }
        }

        return true;
      }
    }

    /*function validaEmail($email)
    {
      $conta = "^[a-zA-Z0-9\._-]+@";
      $domino = "[a-zA-Z0-9\._-]+.";
      $extensao = "([a-zA-Z]{2,4})$";
      $pattern = $conta.$domino.$extensao;

      if (ereg($pattern, $email))
      {
        return true;
      }

      else
      {
        return false;
      }
    }*/

    function isMail($email){
      $er = "/^(([0-9a-zA-Z]+[-._+&])*[0-9a-zA-Z]+@([-0-9a-zA-Z]+[.])+[a-zA-Z]{2,6}){0,1}$/";
      if (preg_match($er, $email)){
        return true;
      } else {
        return false;
      }
    }

    public function ValidarEmail($email)
    {
      //$email = 'contato@mauricioprogramador.com.br';

      if(filter_var($email, FILTER_VALIDATE_EMAIL))
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
