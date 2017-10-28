<?php

	class Endereco{

		private $rua;
		private $numero;
		private $bairro;
		private $complemento;
		private $cidade;
		private $estado;
		private $cep;

		//Construtor para Coordenador e Equipe Executora
		public function __construct($rua, $numero, $bairro, $complemento, $cidade, $cep, $estado){
			$this->rua = $rua;
			$this->numero = $numero;
			$this->bairro = $bairro;
			$this->complemento = $complemento;
			$this->cidade = $cidade;
			$this->cep = $cep;
			$this->estado = $estado;
		}


	  public function getRua(){
		return $this->rua;
	  }
	  public function getNumero(){
		return $this->numero;
	  }
	  public function getBairro(){
		return $this->bairro;
	  }
	  public function getComplemento(){
		return $this->complemento;
	  }
	  public function getCep(){
	  	return $this->cep;
	  }
	  public function getCidade(){
		return $this->cidade;
	  }
	  public function getEstado(){
		return $this->estado;
	  }

	public function setRua($rua){
		$this->rua;
	}
	   public function setNumero($numero){
		$this->numero;
	   }
	   public function setBairro($bairro){
	   	$this->bairro;
	   }
	   public function setComplemento($complemento){
		$this->complemento;
	   }
	   public function setCep($cep){
	   	$this->cep;
	   }
	   public function setCidade($cidade){
		$this->cidade;
	   }
	   public function setEstado($estado){
		$this->estado;
	   }
	   
	}
?>