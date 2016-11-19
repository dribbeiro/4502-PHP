<?php
	trait CRUDUsuario{
		public function cadastrarUsuario(){
			echo "<hr /> Cadastrando Usuario....<hr />";
		}
		public function deletarUsuario(){
			echo "<hr /> Deletando Usuario....<hr />";
		}
		public function validarCPF(){
			echo "Validando CPF na Trait CRUD";
		}
	}

	trait Validacoes{
		public function validarCPF(){
			echo "Validando CPF na Trair Validacoes<hr />";
		}
		public function validarEmail(){
			echo "Validando E-Mail<hr />";
		}
	}

	class Usuario{
		use CRUDUsuario, Validacoes{
			Validacoes::validarCPF insteadof CRUDUsuario;
		}
	}

	$obj = new Usuario();
	$obj->cadastrarUsuario();
	$obj->deletarUsuario();
	$obj->validarCPF();
	$obj->validarEmail();