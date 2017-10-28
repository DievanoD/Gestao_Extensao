<?php
	class  Edital{

	private $numeroEdital;
	private $titulo;
	private $objetivo;
	private $dataInicio;
	private $dataFinal;
	private $arquivo;

	public function __construct($numeroEdital,$titulo,$objetivo,$dataInicio,$dataFinal,$arquivo){

        $this->numeroEdital = $numeroEdital;
		$this->titulo = $titulo;
		$this->objetivo = $objetivo;
		$this->dataInicio = $dataInicio;
		$this->dataFinal = $dataFinal;
		$this->arquivo = $arquivo;
	}
	
	public function getNumeroEdital(){
		return $this->numeroEdital;
	}
	public function getTitulo(){
		return $this->titulo;
	}
	public function getObjetivo(){
		return $this->objetivo;
	}
	public function getDataInicio(){
		return $this->dataInicio;
	}
	public function getDataFinal(){
		return $this->dataFinal;
	}
	public function getArquivo(){
		return $this->arquivo;
	}
	
	public function setNumeroEdital($numeroEdital){
		$this->numeroEdital;
	}
	public function setTitulo($titulo){
		$this->titulo;
	}
	public function setObjetivo($objetivo){
		$this->objetivo;
	}
	public function setDataInicio($dataInicio){
		$this->dataInicio;
	}
	public function setDataFinal($dataFinal){
		$this->dataFinal;
	}
	public function setArquivo($arquivo){
		$this->arquivo;
	}
	}
?>