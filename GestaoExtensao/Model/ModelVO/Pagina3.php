<?php 
   class Pagina3{
    		//Variaveis pagina 3
		private $publico;
		private $publicoNomes;
		private $estruturacao;
		private $envolvAlunExtensionistas;
		private $prevProjPedagogico;
		private $nomeCurso;
		private $resAprovacao;
		private $acompAvaliacao;
		private $compGrupoPesquisa;
		private $envolvMembEquipExecutora;
		private $link;

				//Construtor Pagina 3
		public function __construct($publico, $publicoNomes, $estruturacao, $envolvAlunExtensionistas, $prevProjPedagogico, $nomeCurso, $resAprovacao, $acompAvaliacao, $compGrupoPesquisa, $envolvMembEquipExecutora, $link){

			$this->publico = $publico;
			$this->publicoNomes = $publicoNomes;
			$this->estruturacao = $estruturacao;
			$this->envolvAlunExtensionistas = $envolvAlunExtensionistas;
			$this->prevProjPedagogico = $prevProjPedagogico;
			$this->nomeCurso = $nomeCurso;
			$this->resAprovacao = $resAprovacao;
			$this->acompAvaliacao = $acompAvaliacao;
			$this->compGrupoPesquisa = $compGrupoPesquisa;
			$this->envolvMembEquipExecutora = $envolvMembEquipExecutora;
			$this->link = $link;
		}

		public function getPublico(){
			return $this->publico;
		}
		public function getPublicoNomes(){
			return $this->publicoNomes;
		}
		public function getEstruturacao(){
			return $this->estruturacao;
		}
		public function getEnvolvAlunExtensionistas(){
			return $this->envolvAlunExtensionistas;
		}
		public function getPrevProjPedagogico(){
			return $this->prevProjPedagogico;
		}
		public function getNomeCurso(){
			return $this->nomeCurso;
		}
		public function getResAprovacao(){
			return $this->resAprovacao;
		}
		public function getAcompAvaliacao(){
			return $this->acompAvaliacao;
		}
		public function getCompGrupoPesquisa(){
			return $this->compGrupoPesquisa;
		}
		public function getEnvolvMembEquipExecutora(){
			return $this->envolvMembEquipExecutora;
		}
		public function getLink(){
			return $this->link;
		}

		public function setPublico($publico){
			return $this->publico;
		}
		public function setPublicoNomes($publicoNomes){
			return $this->publicoNomes;
		}
		public function setEstruturacao($estruturacao){
			return $this->estruturacao;
		}
		public function setEnvolvAlunExtensionistas($envolvAlunExtensionistas){
			return $this->envolvAlunExtensionistas;
		}
		public function setPrevProjPedagogico($prevProjPedagogico){
			return $this->prevProjPedagogico;
		}
		public function setNomeCurso($nomeCurso){
			return $this->nomeCurso;
		}
		public function setResAprovacao($resAprovacao){
			return $this->resAprovacao;
		}
		public function setAcompAvaliacao($acompAvaliacao){
			return $this->acompAvaliacao;
		}
		public function setCompGrupoPesquisa($compGrupoPesquisa){
			return $this->compGrupoPesquisa;
		}
		public function setEnvolvMembEquipExecutora($envolvMembEquipExecutora){
			return $this->envolvMembEquipExecutora;
		}
		public function setLink($link){
			return $this->link;
		}


   }


 ?>