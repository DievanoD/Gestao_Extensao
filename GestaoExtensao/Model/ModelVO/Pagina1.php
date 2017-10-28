<?php 
   class Pagina1{
   
   		//Variaveis pagina 1
		private $titulo;
		private $resumo;
		private $campus;
		private $linhaExt;
		private $areaConhecim;
		private $areaTemat;
		private $expCoordIFTM;
		private $localExec;
		private $cargaHor;
		private $periodoExec;

			//Construtor Pagina 1
		public function __construct($titulo, $resumo, $campus, $linhaExt, $areaConhecim, $areaTemat, $expCoordIFTM, $localExec, $cargaHor, $periodoExec){

			$this->titulo = $titulo;
			$this->resumo = $resumo;
			$this->campus = $campus;
			$this->linhaExt = $linhaExt;
			$this->areaConhecim = $areaConhecim;
			$this->areaTemat = $areaTemat;
			$this->expCoordIFTM = $expCoordIFTM;
			$this->localExec = $localExec;
			$this->cargaHor = $cargaHor;
			$this->periodoExec = $periodoExec;
		}
		
		public function getTitulo(){
			return $this->titulo;
		}
		public function getResumo(){
			return $this->resumo;
		}
		public function getCampus(){
			return $this->campus;
		}
		public function getLinhaExt(){
			return $this->linhaExt;
		}
		public function getAreaConhecim(){
			return $this->areaConhecim;
		}
		public function getAreaTemat(){
			return $this->areaTemat;
		}
		public function getExpCoordIFTM(){
			return $this->expCoordIFTM;
		}
		public function getLocalExec(){
			return $this->localExec;
		}
		public function getCargaHor(){
			return $this->cargaHor;
		}
		public function getPeriodoExec(){
			return $this->periodoExec;
		}

		public function setTitulo($titulo){
			$this->titulo;
		}
		public function setResumo($resumo){
			$this->resumo;
		}
		public function setCampus($campus){
			return $this->campus;
		}
		public function setLinhaExt($linhaExt){
			return $this->linhaExt;
		}
		public function setAreaConhecim($areaConhecim){
			return $this->areaConhecim;
		}
		public function setAreaTemat($areaTemat){
			return $this->areaTemat;
		}
		public function setExpCoordIFTM($expCoordIFTM){
			return $this->expCoordIFTM;
		}
		public function setLocalExec($localExec){
			return $this->localExec;
		}
		public function setCargaHor($cargaHor){
			return $this->cargaHor;
		}
		public function setPeriodoExec($periodoExec){
			return $this->periodoExec;
		}	

   }


 ?>