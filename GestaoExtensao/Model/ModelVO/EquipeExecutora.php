<?php 
   
   class EquipeExecutora{

     private $nome;
     private $cpf;
     private $area_departamento;
     private $formacao_academica;
     private $carga_horaria;
     public $contato;

     public function __construct($nome,$cpf,,$area_departamento,$formacao_academica,$carga_horaria,$contato) {
     	$this->nome = $nome;
      $this->cpf = $cpf;
      $this->area_departamento = $area_departamento;
      $this->formacao_academica = $formacao_academica;
      $this->carga_horaria = $carga_horaria;
     	$this->contato = new Contato;
     }

  public function getNome(){
    return $this->nome;
  }
  public function getCpf(){
    return $this->cpf;
  } 
  public function getArea_dapartamento(){
    return $this->area_departamento;
  }
  public function getFomacao_academica(){
    return $this->formacao_academica;
  }
  public function getCarga_horaria(){
    return $this->carga_horaria;
  }   

  public function getContao(){
		return $this->contato->getContato();
	}
	public function setEmail($email,$telefone){
		$this->$this->contato->setCotato($email,$telefone);
	}

}

 ?>