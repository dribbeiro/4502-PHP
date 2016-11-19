<?php

	require('Lib/autoload.php');

	use Controller\UsuarioController;
	use View\UsuarioView;

	$view = new UsuarioView();
	$controller = new UsuarioController();

	$controller->logarUsuario($_POST);
	$view->carregarListagem();