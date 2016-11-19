<?php
	class Usuario{
		public $nome;
		public $email;

		public function __set($name, $value){
			if(property_exists($this, $name)){
				$this->$name = $value;
			} else {
				echo "<hr /> O Atributo {$name} não existe. SET";
			}
		}

		public function __get($name){
			if(property_exists($this, $name)){
				return $this->$name;
			} else {
				echo "<hr /> O Atributo {$name} não existe. GET";
			}
		}
	}

	$obj = new Usuario();
	$obj->nome = "Nome Usuario";
	$obj->email = "email@4linux";
	$obj->idade = "25";
	echo "<hr /> {$obj->nome} <br /> {$obj->email} <br /> {$obj->idade}";