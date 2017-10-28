<?php

require_once("../Model/Service/ConexaoDB.php");

class UsuarioDao {

	public function inserir(Usuario $usuario) {
        $conexao = new ConexaoDB();

        $conn = $conexao->Conecta();

        mysqli_autocommit($conn, FALSE);
        mysqli_report(MYSQLI_REPORT_ERROR|MYSQLI_REPORT_STRICT);
        //$conn->autocommit(FALSE); 

        try {
            $conn->begin_transaction();

            $sql = "INSERT INTO contato (telefone, email) VALUES (?,?)";
            $stmt = $conn->prepare($sql);
            
            $stmt->bind_param("ss", $telefone, $email);
            
            $telefone = $usuario->getContato()->getTelefone();
            $email = $usuario->getContato()->getEmail();

            $stmt->execute();
            $last_id = $conn->insert_id;

            $sql = "INSERT INTO usuario (nome, cpf, formacao_academica, area_departamento, carga_horaria, coordenacao, senha, tipo, status, idcontato) VALUES (?,?,?,?,?,?,?,?,?,?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sssssssssi", $nome, $cpf, $formacao, $areaD, $cargaH, $coordenacao, $senha, $tipoUsuario, $status, $last_id);

            $nome = $usuario->getNome();
            $cpf = $usuario->getCpf();
            $areaD = $usuario->getArea_dapartamento();
            $formacao = $usuario->getFomacao_academica();
            $cargaH = $usuario->getCarga_horaria();
            $coordenacao = $usuario->getCoordenacao();
            $senha = $usuario->getSenha();
            $tipoUsuario = $usuario->getTipoUsuario();
            $status = $usuario->getStatus();

            $stmt->execute();

            $conn->commit();
        }catch (mysqli_sql_exception $e){
            echo $e->getMessage();
            $conn->rollback();
        }
    }

    public function consultar($sql) {

        $conexao = new ConexaoDB();

        $conn = $conexao->Conecta();

        $result = $conn->Query($sql);

        $this->Verifica = $result->num_rows;

        $this->Linha = $conn->affected_rows;

        $this->Result = $result;
    }

    public function mudaStatus($id, $status) {
        $delete = 'UPDATE usuario set status = "'. $status .'" WHERE idusuario = "' . $id . '"';

        $conexao = new ConexaoDB();

        $conn = $conexao->Conecta();

        $conn->Query($delete);
    }

    public function alterar($nome, $cpf, $formacao_academica, $area_departamento, $carga_horaria, $senha, $tipo, $email, $telefone, $id) {

        $update = 'UPDATE usuario INNER JOIN contato ON usuario.idcontato=contato.idcontato SET nome ="' . $nome . '", cpf = "' .$cpf. '", formacao_academica = "' .$formacao_academica. '", area_departamento = "'.$area_departamento.'", carga_horaria = "'.$carga_horaria.'", senha="' . $senha . '", tipo = "' . $tipo . '", email = "' . $email . '" , telefone = "' . $telefone . '" WHERE idusuario = "' . $id . '"';

        $conexao = new ConexaoDB();

        $conn = $conexao->Conecta();

        $result = $conn->Query($update);

        $this->Linha = $conn->affected_rows;

        $this->Result = $result;
    }
	    
}

?>