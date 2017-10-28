<?php 
   class Pagina4{
    		
		//Variaveis pagina 4
		private $vincLinhaPesq;
		private $projPesqIFTM;
		private $publicCoordProjExtensao;
		private $particCoordProjExtensao;
		private $resultSoc_Econ_Amb;
		private $descGeralProj;
		private $metodExecAtiv;

				//Construtor Pagina 4 item 6.5 a 8.1
		public function __construct($vincLinhaPesq, $projPesqIFTM, $publicCoordProjExtensao, $particCoordProjExtensao, $resultSoc_Econ_Amb, $descGeralProj, $metodExecAtiv){

			$this->vincLinhaPesq = $vincLinhaPesq;
			$this->projPesqIFTM = $projPesqIFTM;
			$this->publicCoordProjExtensao = $publicCoordProjExtensao;
			$this->particCoordProjExtensao = $particCoordProjExtensao;
			$this->resultSoc_Econ_Amb = $resultSoc_Econ_Amb;
			$this->descGeralProj = $descGeralProj;
			$this->metodExecAtiv = $metodExecAtiv;
		}

		public function getVincLinhaPesq(){
			return $this->vincLinhaPesq;
		}
		public function getProjPesqIFTM(){
			return $this->projPesqIFTM;
		}
		public function getPublicCoordProjExtensao(){
			return $this->publicCoordProjExtensao;
		}
		public function getParticCoordProjExtensao(){
			return $this->particCoordProjExtensao;
		}
		public function getResultSoc_Econ_Amb(){
			return $this->resultSoc_Econ_Amb;
		}
		public function getDescGeralProj(){
			return $this->descGeralProj;
		}
		public function getMetodExecAtiv(){
			return $this->metodExecAtiv;
		}

      	public function setVincLinhaPesq($vincLinhaPesq){
			return $this->vincLinhaPesq;
		}
		public function setProjPesqIFTM($projPesqIFTM){
			return $this->projPesqIFTM;
		}
		public function setPublicCoordProjExtensao($publicCoordProjExtensao){
			return $this->publicCoordProjExtensao;
		}
		public function setParticCoordProjExtensao($particCoordProjExtensao){
			return $this->particCoordProjExtensao;
		}
		public function setResultSoc_Econ_Amb($resultSoc_Econ_Amb){
			return $this->resultSoc_Econ_Amb;
		}
		public function setDescGeralProj($descGeralProj){
			return $this->descGeralProj;
		}
		public function setMetodExecAtiv($metodExecAtiv){
			return $this->metodExecAtiv;
		}


   }
 ?>