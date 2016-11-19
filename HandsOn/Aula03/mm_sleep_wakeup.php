<?php
	class Usuarios{
		public $nome;
		public $email;

		public function __sleep(){
			echo "Objeto Serializado <hr />";
			return array('nome','email');
		}

		public function __wakeup(){
			echo "<hr />Objeto reconstruido";
		}

	}

	$obj = new Usuarios();
	$obj->nome = 'Nome usuario';
	$obj->email = 'email usuario';
	print_r($obj);
	echo "<hr />";
	$serial = serialize($obj);
	print_r($serial);
	unserialize($serial);