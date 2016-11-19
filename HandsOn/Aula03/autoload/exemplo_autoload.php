<?php
	
	//include('Contas.php');
	//include('Usuarios.php');

	function __autoload($class){
		include("$class.php");
	}

	$conta = new Contas();
	$usuario = new Usuarios();

	$usuario->nome = "Titular da conta";
	$conta->setTitular($usuario);

	echo "Saldo: {$conta->saldo} <hr />";
	echo "Titular: {$conta->titular}";