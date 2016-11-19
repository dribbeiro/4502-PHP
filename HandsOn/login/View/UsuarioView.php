<?php
	namespace View;

	use Model\UsuarioModel;
	class UsuarioView{

		private $model;

		public function __construct(){
			$this->model = new UsuarioModel();
		}

		public function carregarHome($retorno){
			if($retorno){
				echo 'Seja Bem vindo '.$retorno->login;
			}else{
				echo 'Usuario ou Senha Invalidos';
			}
		}

		public function carregarListagem(){
			foreach($this->model->buscarLista() as $registro){
				echo '<pre>';
				print_r($registro);
			}

		}

	}