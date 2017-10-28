<?php

require_once("Contato.php");

	class Usuario{

        private $nome;
		private $cpf;
		private $formacao_academica;
        private $area_departamento;
        private $carga_horaria;
        private $coordenacao;
        private $senha;
		private $tipoUsuario;
		private $status;
        public $Contato;

    public function __construct($nome, $cpf, $formacao_academica, $area_departamento, $carga_horaria, $coordenacao, $senha, $tipoUsuario, $status) {
    	$this->nome = $nome;
        $this->cpf = $cpf;
        $this->formacao_academica = $formacao_academica;
        $this->area_departamento = $area_departamento;
        $this->carga_horaria = $carga_horaria;
        $this->coordenacao = $coordenacao;
        $this->senha = $senha;
        $this->tipoUsuario = $tipoUsuario;
        $this->status = $status;
		//$this->contato = $contato;
	}

	public function getNome(){
		return $this->nome;
	}
	public function getCpf(){
		return $this->cpf;
	}
	public function getFomacao_academica(){
		return $this->formacao_academica;
	}
    public function getArea_dapartamento(){
		return $this->area_departamento;
	}
	public function getCarga_horaria(){
		return $this->carga_horaria;
	}
    public function getCoordenacao(){
		return $this->coordenacao;
	}
	public function getSenha(){
		return $this->senha;
	}
	public function getTipoUsuario(){
		return $this->tipoUsuario;
	}
	public function getStatus(){
		return $this->status;	
	}

	public function setNome($nome){
		return $this->nome;
	}

	public function setCpf($cpf){
		return $this->cpf;
	}

	public function setFormacao_academica($formacao_academica){
		return $this->formacao_academica;
	}

	public function setArea_departamento($area_departamento){
		return $this->area_departamento;
	}	

	public function setCarga_horaria($carga_horaria){
		return $this->carga_horaria;
	}

	public function setCoordenacao($coordenacao){
		return $this->coordenacao;
	}

	public function setSenha($senha){
		$this->senha;
	}
	public function setTipoUsuario($tipoUsuario){
		$this->tipoUsuario;
	}
	public function setStatus($status){
		$this->status;
	}

	public function setContato($email, $telefone){
		//$this->contato->setContato($email, $telefone);
		$this->Contato = new Contato($email, $telefone);
	}

	public function getContato(){
		return $this->Contato;
	}
}
?>