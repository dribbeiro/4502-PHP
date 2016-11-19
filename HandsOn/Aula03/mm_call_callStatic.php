<?php

	class Usuarios{
		public $nome;

		public function __call($metodo, $atributos){
			echo "O Metodo $metodo foi chamado, mas ele não existe";
			echo "<pre>";
			print_r($atributos);
		}

		public static function __callStatic($metodo, $atributos){
			echo "O Metodo $metodo foi chamado, mas ele não existe";
			echo "<pre>";
			print_r($atributos);
		}
	}

	$obj = new Usuarios();
	$obj->mostrarNome("Nome do Usuario","senha","email");
	Usuarios::mostrarNome("Nome do Usuario","senha","email");