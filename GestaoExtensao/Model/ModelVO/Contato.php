<?php

	class  Contato {

		public $email;
		public $telefone;

		//Construtor para Coordenador e Equipe Executora
		public function __construct($email, $telefone){
			$this->email = $email;
			$this->telefone = $telefone;
		}

		//public function __construct(){}

		public function getEmail(){
			return $this->email;
		}
		public function getTelefone(){
			return $this->telefone;
		}

		public function setEmail($email){
			$this->email;
		}
		public function setTelefone($telefone){
			$this->telefone;
		}


		/*public function setContato($email, $telefone){
			$this->email = $email;
			$this->telefone = $telefone;
		}*/

	}
?>