<?php
	namespace Controller;
	
	use Entity\UsuarioEntity;
	use Model\UsuarioModel;
	use View\UsuarioView;
	class UsuarioController{

		private $model;
		private $entidade;
		private $view;

		public function __construct(){
			$this->model = new UsuarioModel();
			$this->entidade = new UsuarioEntity();
			$this->view = new UsuarioView();
		}

		public function logarUsuario($dados){

			$this->entidade->setLogin($dados['login']);
			$this->entidade->setSenha($dados['senha']);
			
			$retorno = $this->model->buscarUsuario($this->entidade);
			$this->view->carregarHome($retorno);
		}

	}