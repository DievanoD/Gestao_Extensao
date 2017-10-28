<?php 
   
   class Coordenador{
     
     public $idusuario;
     private $area_departamento;
	 private $formacao_academica;
	 private $carga_horaria;

     public function __construct($idusuario,$area_departamento,$formacao_academica,$carga_horaria,$contato) {
  		$this->idusuario = $idusuario;
     	$this->area_departamento = $area_departamento;
		$this->formacao_academica = $formacao_academica;
		$this->carga_horaria = $carga_horaria;
     }
    public function getIdUsuario(){
    	return $this->idusuario;
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

   }

 ?>