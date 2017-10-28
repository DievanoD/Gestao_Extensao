<?php 
   class Pagina2{
    		//Variaveis pagina 2
		private $cadasJustific;
		private $cadasObjGeral;
		private $cadasObjExp;
		private $cronogObjExpec;
		private $cronogAcao;
		private $cronogExecucao;

		//Construtor Pagina 2
		public function __construct($cadasJustific, $cadasObjGeral, $cadasObjExp, $cronogObjExpec, $cronogAcao, $cronogExecucao){

			$this->cadasJustific = $cadasJustific;
			$this->cadasObjGeral = $cadasObjGeral;
			$this->cadasObjExp = $cadasObjExp;
			$this->cronogObjExpec = $cronogObjExpec;
			$this->cronogAcao = $cronogAcao;
			$this->cronogExecucao = $cronogExecucao;
		}

		public function getCadasJustific(){
			return $this->cadasJustific;
		}
		public function getCadasObjGeral(){
			return $this->cadasObjGeral;
		}
		public function getCadasObjExp(){
			return $this->cadasObjExp;
		}
		public function getCronogObjExpec(){
			return $this->cronogObjExpec;
		}
		public function getCronogAcao(){
			return $this->cronogAcao;
		}
		public function getCronogExecucao(){
			return $this->cronogExecucao;
		}

		public function setCadasJustific($cadasJustific){
			return $this->cadasJustific;
		}
		public function setCadasObjGeral($cadasObjGeral){
			return $this->cadasObjGeral;
		}
		public function setCadasObjExp($cadasObjExp){
			return $this->cadasObjExp;
		}
		public function setCronogObjExpec($cronogObjExpec){
			return $this->cronogObjExpec;
		}
		public function setCronogAcao($cronogAcao){
			return $this->cronogAcao;
		}
		public function setCronogExecucao($cronogExecucao){
			return $this->cronogExecucao;
		}

   }


 ?>