<?php
	class Usuarios{
		public $nome = "Nome Usuario";
		public $email = "Email Usuario";

		public function __toString(){
			return "Nome: {$this->nome} <hr /> Email: {$this->email}";
		}
	}

	$obj = new Usuarios();
	echo $obj;