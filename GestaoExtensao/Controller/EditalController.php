<?php

require_once("../Model/ModelVO/Edital.php"); 
require_once("../Model/ModelDAO/EditalDao.php"); // ----- CARREGA A CLASSE USUARIO  ----- //

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['method'])) { // aqui é onde vai decorrer a chamada se houver um       *request* POST
        $method = $_POST['method'];
        $controler = new EditalController();
        if(method_exists($controler, $method)) {
            $controler->$method($_POST);
        } else {
            echo 'Metodo incorreto';
        }
    }


class EditalController
{
    public function incluir(){
        global $linha; // ----- VARIAVEL GLOBAL LINHA ----- //
        global $rs; // ----- VARIALVEL GLOGAL RS, É NOSSO CONJUNTO DE DADOS OU RESULTADO ----- //

        $diretorio = "../Arquivos/"; //--- DIRETÓRIO A SE R SALVO O ARQUIVO DO UPLOAD -----//

        //if (isset($_POST['botao'])) {
            $numeroEdital = $_POST['numero_edital'];
            $titulo = $_POST['titulo'];
            $objetivo = $_POST['objetivo'];
            $dataInicio = date("Y-m-d",strtotime($_POST["data_inicio"]));
            $dataFinal = date("Y-m-d",strtotime($_POST["data_final"]));

            $arq = $_FILES['arquivo']['name'];

                $arq = str_replace("","_", $arq);
                $arq = str_replace("ç","c", $arq);

            if (!is_dir($diretorio)) {
                mkdir($diretorio);

            } else if (file_exists("$diretorio/$arq")) {
                $a = 1;

                while (file_exists("$diretorio/[$a]$arq")) {
                    $a++;
                }

                $arq = "[".$a."]".$arq;
            }

            if (move_uploaded_file($_FILES['arquivo'] ['tmp_name'], $diretorio.$arq)) {
                /*echo"<script>
                    alert('$numeroEdital,$titulo,$objetivo,$dataInicio,$dataFinal,$arq');
                </script>";*/

                $edital = new Edital($numeroEdital,$titulo,$objetivo,$dataInicio,$dataFinal,$arq);
                $editalDao = new EditalDao($arquivo); 
                //$editalDao->consultar("select * from edital");
                //$linha = $editalDao->Linha;
                //$rs = $editalDao->Result;

                $editalDao->incluir($edital);
                echo '<script>alert("Cadastrado com sucesso !");</script>'; // ===== ALERTA JAVA SCRIPT NA TELA DO USUARIO ===== //
                echo '<script>window.location="../View/Area_De_Trabalho.php?pagina=cadEdital";</script>'; // ===== REDIRECIONA O USUARIO DEPOIS DE FEITA A OPERAÇÃO DESEJADA ===== //
            }
        //}
    }

    function Processo($Processo) {

    switch ($Processo) { // ----- A PARTIR DESTE PONTO TESTA O PROCESSO PASSADO PELA CAMADA DE VISÃO ----- //

        /*case 'incluir': // ----- PROCESSO DE INCLUIR PASSADO NA VISÃO INCLUIR USUARIO ----- //

            global $linha; // ----- VARIAVEL GLOBAL LINHA ----- //
            global $rs; // ----- VARIALVEL GLOGAL RS, É NOSSO CONJUNTO DE DADOS OU RESULTADO ----- //

            $diretorio = "../arquivos/"; //--- DIRETÓRIO A SE R SALVO O ARQUIVO DO UPLOAD -----//

         if (isset($_POST['botao'])) {
            $numeroEdital = $_POST['numero_edital'];
            $titulo = $_POST['titulo'];
            $objetivo = $_POST['objetivo'];
            $dataInicio = date("Y-m-d",strtotime($_POST["data_inicio"]));
            $dataFinal = date("Y-m-d",strtotime($_POST["data_final"]));

            $arq = $_FILES['arquivo']['name'];

                $arq = str_replace("","_", $arq);
                $arq = str_replace("ç","c", $arq);

             if (!is_dir($diretorio)) {
                mkdir($diretorio);

             } else if (file_exists("$diretorio/$arq")) {
                 $a = 1;

                 while (file_exists("$diretorio/[$a]$arq")) {
                  $a++;
                 }

                 $arq = "[".$a."]".$arq;
               }

        if (move_uploaded_file($_FILES['arquivo'] ['tmp_name'], $diretorio.$arq)) {
            echo"<script>
                alert('$numeroEdital,$titulo,$objetivo,$dataInicio,$dataFinal,$arq');
            </script>";

            $edital = new Edital($numeroEdital,$titulo,$objetivo,$dataInicio,$dataFinal,$arq);
            $editalDao = new EditalDao($arquivo); 
            $editalDao->consultar("select * from arquivos");
            $linha = $editalDao->Linha;
            $rs = $editalDao->Result;

                $editalDao->incluir($edital);
                echo '<script>alert("Cadastrado com sucesso !");</script>'; // ===== ALERTA JAVA SCRIPT NA TELA DO USUARIO ===== //
                echo '<script>window.location="../view/index.php";</script>'; // ===== REDIRECIONA O USUARIO DEPOIS DE FEITA A OPERAÇÃO DESEJADA ===== //
            }
          }
        break;*/

        case 'consultar':

            global $linha;
            global $rs;

            $arquivoDao = new EditalDao(); 
            $arquivoDao->consultar("select * from edital order by data_final desc");
            $linha = $arquivoDao->Linha;
            $rs = $arquivoDao->Result;

        break;

        case 'editar':

            global $linha;
            global $rs;

            $editalDao = new EditalDao();

            $editalDao->consultar("select numero_edital,titulo,objetivo,data_inicio,data_final from edital where id=" . $_GET['id']);
            $linha = $editalDao->Linha;
            $rs = $editalDao->Result;

            if (isset($_POST['botao'])) {
               $numeroEdital = $_POST['numero_edital'];
               $titulo = $_POST['titulo'];
               $objetivo = $_POST['objetivo'];
               $dataInicio = date("Y-m-d",strtotime($_POST["data_inicio"]));
               $dataFinal = date("Y-m-d",strtotime($_POST["data_final"]));
               $id =  $_GET['id'];

                $editalDao->alterar($numeroEdital,$titulo,$objetivo,$dataInicio,$dataFinal,$id);
                
                echo '<script>alert("Alterado com sucesso !");</script>';
                echo '<script>window.location="Area_De_Trabalho.php?pagina=consultaEdital";</script>';
             }
        break;
    }

}
    
}

