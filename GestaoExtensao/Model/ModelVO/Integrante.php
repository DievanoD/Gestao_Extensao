<?php
	
	abstract class Integrante extends Pessoa{
		//Coordenador e Equipe Executora
		protected $tipo;
		protected $area;
		protected $formacao;
		protected $cargaHoraria;

		//Parceiro Externo
		protected $opcao;
		protected $opcaoAC;
		protected $atuacao;
		protected $responsabilidades;

		//Coordenador e Equipe Executora
		public function __construct($tipo, $nome, $area, $telefone, $email, $formacao, $cargaHoraria){
			parent::Pessoa($nome, $telefone, $email);

			$this->tipo = $tipo;
			$this->area = $area;
			$this->formacao = $formacao;
<<<<<<< HEAD
			$this->cargaHoraria = $cargaHoraria;
=======
			$this->cargaHoraria = $cargaHoraria;			
		}

		//Parceiro Externo
		public function __construct($opcao, $opcaoAC, $rua, $numero, $bairro, $cep, $cidade, $estado, $responsavel, $telefone, $mail, $atuacao, $responsabilidades){
			parent::Pessoa($rua, $numero, $bairro, $cep, $cidade, $estado, $responsavel, $telefone, $mail);

			$this->opcao= $opcao;
			$this->opcaoAC= $opcaoAC;
			$this->atuacao= $atuacao;
			$this->responsabilidades= $responsabilidades;
>>>>>>> 69da9b7807083c4334166aee8c38586f9553f5c4
		}
	
		public function getTipo(){
			return $this->tipo;
		}
		public function getArea(){
			return $this->area;
		}
		public function getFormacao(){
			return $this->formacao;
		}
		public function getCargaHoraria(){
			return $this->cargaHoraria;
		}
		public function getOpcao(){
			return $this->opcao;
		}
		public function getOpcaoAC(){
			return $this->opcaoAC;
		}
		public function getAtuacao(){
			return $this->atuacao;
		}
		public function getResponsabilidades(){
			return $this->responsabilidades;
		}

		public function setTipo($tipo){
			$this->tipo;
		}
		public function setArea($area){
			$this->area;
		}
		public function setFormacao($formacao){
			$this->formacao;
		}
		public function setCargaHoraria($cargaHoraria){
			$this->cargaHoraria;
		}
		public function setOpcao($opcao){
			$this->opcao;
		}
		public function setOpcaoAC($opcaoAC){
			$this->opcaoAC;
		}
		public function setAtuacao($atuacao){
			$this->atuacao;
		}
		public function setResponsabilidades($responsabilidades){
			$this->responsabilidades;
		}
	}
?>