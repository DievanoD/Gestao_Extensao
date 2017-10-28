<?php 
require_once("Contato.php");
require_once("Endereco.php");

	class ParceiroExterno{
		private $nome;
		private $responsavel;
		private $area_departamento;
		private $responsabilidades;
		private $acordo;
		public $contato;
		public $endereco;

		public function __construct($nome,$responsavel,$area_departamento,$responsabilidades,$acordo){
			$this->nome = $nome;
			$this->responsavel = $responsavel;
			$this->area_departamento = $area_departamento;
			$this->responsabilidades = $responsabilidades;
			$this->acordo = $acordo;
		}

		public function getNome(){
			return $this->nome;
		}
		public function getResponsavel(){
			return $this->responsavel;
		}
		public function getArea_departamento(){
			return $this->area_departamento;
		}
		public function getResponsabilidades(){
			return $this->responsabilidades;
		}
		public function getAcordo(){
			return $this->acordo;
		}

		public function setNome($nome){
			$this->nome;
		}
		public function setResponsavel($responsavel){
			$this->responsavel;
		}
		public function setArea_departamento($area_departamento){
			$this->area_departamento;
		}
		public function setResponsabilidades($responsabilidades){
			$this->responsabilidades;
		}
		public function setAcordo($acordo){
			$this->acordo;
		}

		public function setContato($email, $telefone){
			$this->contato = new Contato($email, $telefone);
		}

		public function getContato(){
			return $this->contato;
		}

		public function setEndereco($rua, $numero, $bairro, $complemento, $cidade, $cep, $estado){
			$this->endereco = new Endereco($rua, $numero, $bairro, $complemento, $cidade, $cep, $estado);
		}

		public function getEndereco(){
			return $this->endereco;
		}

	}

 ?>