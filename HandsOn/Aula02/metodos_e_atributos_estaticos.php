<?php

	class Usuario{

		public static $tipoUsuario;
		private $nome;
		private $email;

		public function setNome($valor){
			$this->nome = $valor;
		}

		public function setEmail($valor){
			$this->email = $valor;
		}

		public function getNome(){
			return $this->nome;
		}

		public function getEmail(){
			return $this->email;
		}

		public static function mostrarTipoUsuario(){
			return self::$tipoUsuario;
		}

	}

	$obj = new Usuario();
	$obj->setNome("Nome do Usuario");
	$obj->setEmail("email@4linux.com.br");

	Usuario::$tipoUsuario = "Comum";
	echo "Nome: {$obj->getNome()}";
	echo "<hr />";
	echo "Email: {$obj->getEmail()}";
	echo "<hr />";
	echo "Tipo do Usuario: ". Usuario::mostrarTipoUsuario();