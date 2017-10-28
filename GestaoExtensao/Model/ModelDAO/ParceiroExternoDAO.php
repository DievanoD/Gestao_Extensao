<?php

require_once("../Model/Service/ConexaoDB.php");

class ParceiroExternoDAO {
	
	public function inserir(ParceiroExterno $parceiro) {
        $conexao = new ConexaoDB();

        $conn = $conexao->Conecta();

        mysqli_autocommit($conn, FALSE);
        mysqli_report(MYSQLI_REPORT_ERROR|MYSQLI_REPORT_STRICT);

        try {
            $conn->begin_transaction();

            $sql = "INSERT INTO contato (telefone, email) VALUES (?,?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ss", $telefone, $email);

            $telefone = $parceiro->getContato()->getTelefone();
            $email = $parceiro->getContato()->getEmail();

            $stmt->execute();
            $id_cont = $conn->insert_id;

            // ------------------------------------------------------- //

            $sql = "INSERT INTO endereco (rua, numero, bairro, complemento, cidade, cep, estado) VALUES (?,?,?,?,?,?,?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sssssis", $rua, $numero, $bairro, $complemento, $cidade, $cep, $estado);

            $rua = $parceiro->getEndereco()->getRua();
            $numero = $parceiro->getEndereco()->getNumero();
            $bairro = $parceiro->getEndereco()->getBairro();
            $complemento = $parceiro->getEndereco()->getComplemento();
            $cidade = $parceiro->getEndereco()->getCidade();
            $cep = $parceiro->getEndereco()->getCep();
            $estado = $parceiro->getEndereco()->getEstado();

            $stmt->execute();
            $id_end = $conn->insert_id;

            // ------------------------------------------------------- //

            $sql = "INSERT INTO parceiro_externo (nome, responsavel, area_departamento, responsabilidades, acordo, contato_idcontato, endereco_idendereco) VALUES (?,?,?,?,?,?,?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sssssii", $nome, $resp, $area, $responsabilidades, $acordo, $id_cont, $id_end);

            $nome = $parceiro->getNome();
            $resp = $parceiro->getResponsavel();
            $area = $parceiro->getArea_departamento();
            $responsabilidades = $parceiro->getResponsabilidades();
            $acordo = $parceiro->getAcordo();

            $stmt->execute();

            $conn->commit();
        }catch (mysqli_sql_exception $e){
            echo $e->getMessage();
            $conn->rollback();
        }
    }
	
}

?>