<?php
// ----- CARREGA A CLASSE DE CONEXÃO COM O BANCO DE DADOS
require_once('../Model/Service/ConexaoDB.php');

class EditalDao {

    // // ----- FUNÇÃO DE INCLUSÃO DE DADOS ----- //
    
    public function incluir(Edital $arq) { 

        $insert = "INSERT INTO edital(numero_edital,titulo,objetivo,data_inicio,data_final,arquivo) VALUES
         ('{$arq->getNumeroEdital()}','{$arq->getTitulo()}','{$arq->getObjetivo()}','{$arq->getDataInicio()}','{$arq->getDataFinal()}','{$arq->getArquivo()}')";
        $Conexao = new ConexaoDB();
        $conn = $Conexao->Conecta();
        $conn->Query($insert); 
    }
    
    // ----- FUNÇÃO DE CONSULTA DE DADOS ----- //

    public function consultar($sql) {

      $conexao = new ConexaoDB();
      $conn = $conexao->Conecta();
      //$conn->Query($sql);

      $result = $conn->Query($sql);

      $this->Linha = $conn->affected_rows;

      $this->Result = $result;
    }

    // ----- FUNÇÃO DE EXCLUSÃO DE DADOS ----- //
    
    public function excluir($id) {

       $delete = 'delete from edital where idedital="' . $id . '"';
       $Conexao = new ConexaoDB();
       $conn = $Conexao->Conecta();
       $conn->Query($delete);
    }

    // ----- FUNÇÃO DE EDIÇÃO DE DADOS ----- //
    
    public function alterar($numero_edital,$titulo,$objetivo,$data_inicia,$data_final,$id) {

      $update = "UPDATE edital SET numero_edital='$numero_edital',titulo='$titulo',objetivo='$objetivo', data_inicio='$data_inicia', data_final='$data_final' WHERE id=$id";

      $conexao = new ConexaoDB();
      $conn = $conexao->Conecta();

      $result = $conn->Query($update);

      $this->Linha = $conn->affected_rows;
      $this->Result = $result;
       //$this->Linha = @mysqli_affected_rows($Conexao->result);
       //$this->Result = $Conexao->result;
    }

}
