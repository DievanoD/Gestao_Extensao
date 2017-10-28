<?php
	
	abstract class Projeto{

		//Variaveis
		private $item;
		private $descDet;
		private $unid;
		private $qtd;
		private $custoUn;
		private $custoTot;
		private $total;


		private $rubrica;

		private $rubrica;		

		private $recAprov;
		private $recApl;
		private $recDev;
		private $totais;

		//Construtor dos ítens 8.2.1 ao 8.2.4
		public function __construct($item, $descDet, $unid, $qtd, $custoUn, $custoTot, $total){

			$this->item = $item;
			$this->descDet = $descDet;
			$this->unid = $unid;
			$this->qtd = $qtd;
			$this->custoUn = $custoUn;
			$this->custoTot = $custoTot;
			$this->total = $total;
			$this->total = $total;			

		}

		//Construtor do ítem 8.2.5
		public function __construct($item, $rubrica, $recAprov, $recApl, $recDev, $totais){

			$this->item = $item;
			$this->rubrica = $rubrica;
			$this->recAprov = $recAprov;
			$this->recApl = $recApl;
			$this->recDev = $recDev;
			$this->totais = $totais;
		}


		public function getItem(){
			return $this->item;
		}
		public function getDescDet(){
			return $this->descDet;
		}
		public function getUnid(){
			return $this->unid;
		}
		public function getQtd(){
			return $this->qtd;
		}
		public function getCustoUn(){
			return $this->custoUn;
		}
		public function getCustoTot(){
			return $this->custoTot;
		}
		public function getTotal(){
			return $this->total;
		}
		public function getRubrica(){
			return $this->rubrica;
		}
		public function getRecAprov(){
			return $this->recAprov;
		}
		public function getRecApl(){
			return $this->recApl;
		}
		public function getRecDev(){
			return $this->recDev;
		}
		public function getTotais(){
			return $this->totais;
		}
		/////set
		public function setItem($item){
			$this->item;
		}
		public function setDescDet($descDet){
			$this->descDet;
		}
		public function setUnid($unid){
			$this->unid;
		}
		public function setQtd($qtd){
			$this->qtd;
		}
		public function setCustoUn($custoUn){
			$this->custoUn;
		}
		public function setCustoTot($custoTot){
			$this->custoTot;
		}
		public function setTotal($total){
			$this->total;
		}
		public function setRubrica($rubrica){
			return $this->rubrica;
		}
		public function setRecAprov($recAprov){
			return $this->recAprov;
		}
		public function setRecApl($recApl){
			return $this->recApl;
		}
		public function setRecDev($recDev){
			return $this->recDev;
		}
		public function setTotais($totais){
			return $this->totais;
		}
	}
?>		