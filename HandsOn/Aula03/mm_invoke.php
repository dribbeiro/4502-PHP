<?php
	class Usuarios{
		public $nome = "Nome Usuario";
		public $email = "Email Usuario";

		public function __invoke($senha){
			echo "{$this->nome} / {$this->email} / $senha";
		}
	}

	$obj = new Usuarios();
	echo $obj('senha');