<?php 
   class Pagina7{
     //Variaveis pagina 7
		private $contrapItem;
		private $contrapDesc;
		private $contrapUnid;
		private $contrapQtd;
		private $contrapCUnid;
		private $contrapCTotal;
		private $contrapTotal;


		//Construtor Pagina 7
		public function __construct( $contrapItem, $contrapDesc, $contrapUnid, $contrapQtd, $contrapCUnid, $contrapCTotal, $contrapTotal){

			$this->contrapItem = $contrapItem;
			$this->contrapDesc = $contrapDesc;
			$this->contrapUnid = $contrapUnid;
			$this->contrapQtd = $contrapQtd;
			$this->contrapCUnid = $contrapCUnid;
			$this->contrapCTotal = $contrapCTotal;
			$this->contrapTotal = $contrapTotal;

		}
		public function getContrapItem(){
			return $this->contrapItem;
		}
		public function getContrapDesc(){
			return $this->contrapDesc;
		}
		public function getContrapUnid(){
			return $this->contrapUnid;
		}
		public function getContrapQtd(){
			return $this->contrapQtd;
		}
		public function getContrapCUnid(){
			return $this->contrapCUnid;
		}
		public function getContrapCTotal(){
			return $this->contrapCTotal;
		}
		public function getContrapTotal(){
			return $this->contrapTotal;
		}
		
		public function setContrapItem($contrapItem){
			return $this->contrapItem;
		}
		public function setContrapDesc($contrapDesc){
			return $this->contrapDesc;
		}
		public function setContrapUnid($contrapUnid){
			return $this->contrapUnid;
		}
		public function setContrapQtd($contrapQtd){
			return $this->contrapQtd;
		}
		public function setContrapCUnid($contrapCUnid){
			return $this->contrapCUnid;
		}
		public function setContrapCTotal($contrapCTotal){
			return $this->contrapCTotal;
		}
		public function setContrapTotal($contrapTotal){
			return $this->contrapTotal;
		}


   }
 ?>