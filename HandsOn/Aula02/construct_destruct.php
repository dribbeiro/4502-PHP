<?php
	class Usuario{
		private $nome;
		private $email;

		public function __construct(array $dados){
			foreach($dados as $index => $value){
				$this->$index = $value;
			}
		}

		public function getNome(){
			return $this->nome;
		}
		public function getEmail(){
			return $this->email;
		}

		public function __destruct(){
			echo "<hr /> Objeto Destruido <hr />";
		}
	}
	$dados = array("nome"=>"Nome de Usuario","email"=>"email@4linux");
	$usuario = new Usuario($dados);
	echo $usuario->getNome();
	echo "<hr />";
	echo $usuario->getEmail();
	unset($usuario);
	echo "Depois de destruido";