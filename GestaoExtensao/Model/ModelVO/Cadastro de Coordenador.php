<?php
	
	abstract class CadastroCoordenador{
		private $pessoa;

		private $formAcademica;//Formacao academica do coordenador do projeto
		private $expAtivExtensao;//Experiencia como membro em programa e-ou projeto em extensao ou em atividades de extensao
		private $publicAtivExtensao;//Publicacoes do coordenador do programa e-ou projeto relativas a atividades de extensao nos ultimos cinco anos
		private $enventExtensao;//Participacao em eventos de extensao
		private $curricLattes;//Curriculo lattes do coordenador do programa e-ou projeto - pag 6 do edital
	
		public function __construct(Pessoa $pessoa, $pessoa, $formAcademica, $expAtivExtensao, $publicAtivExtensao, $enventExtensao, $curricLattes){
			$this->  $pessoa;
			$this->  $formAcademica;
			$this->  $expAtivExtensao;
			$this->  $publicAtivExtensao;
			$this->  $enventExtensao;
			$this->  $curricLattes;
		}
	
		public function getPessoa(){
			return $this->pessoa;
		}
		public function getFormAcademica(){
			return $this->formAcademica;
		}
		public function getExpAtivExtensao(){
			return $this->expAtivExtensao;
		}
		public function getPublicAtivExtensao(){
			return $this->publicAtivExtensao;
		}
		public function getEnventExtensao(){
			return $this->enventExtensao;
		}
		public function getCurricLattes(){
			return $this->curricLattes;
		}
		public function set($pessoa){
			$this->pessoa;
		}
		public function set($formAcademica){
			$this->formAcademica;
		}
		public function set($expAtivExtensao){
			$this->expAtivExtensao;
		}
		public function set($publicAtivExtensao){
			$this->publicAtivExtensao;
		}
		public function set($enventExtensao){
			$this->enventExtensao;
		}
		public function set($curricLattes){
			$this->curricLattes;
		}
	}
?>