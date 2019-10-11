<?php

	class Pessoa implements JsonSerializable{
		private $nome;
		private $idade;
		private $sexo;	

		public function jsonSerialize(){
			return [
				'nome' => $this->nome,
				'idade' => $this->idade,
				'sexo' => $this->sexo
			];
		}
	

		public function setNome($newval){
			$this->nome = $newval; 
		}

		public function getNome(){
			return $this->nome;
		}

				public function setIdade($newval){
			$this->idade = $newval;
		}

		public function getIdade(){
			return $this->idade;
		}

				public function setSexo($newval){
			$this->sexo = $newval;
		}

		public function getSexo(){
			return $this->sexo;
		}

		public function __construct($nome, $idade, $sexo){
			$this->nome = $nome;
			$this->idade = $idade;
			$this->sexo = $sexo;
		/*	echo "A classe".__CLASS__."
			foi instanciado"; */
		}

		public function __toString(){
			$resultado =
			"Nome: " .$this->nome."<br>".
			"Idade: " .$this->idade."<br>".
			"Sexo: " .$this->sexo."<br>";

			return $resultado;
		}
	}

	?>