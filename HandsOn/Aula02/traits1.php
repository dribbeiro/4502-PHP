<?php
	trait Operacoes{
		public function depositar($valor){
			$this->saldo += $valor;
		}
		public function sacar($valor){
			$this->saldo -= $valor;
		}
		public function mostrarMetodo(){
			echo "Eu sou metodo da Trait Operacoes";
		}

	}

	class Conta{
		use Operacoes;

		public $saldo;
		public $titular;

		public function verSaldo(){
			echo "<hr />Saldo: {$this->saldo}<hr />";
		}
		public function mostrarMetodo(){
			echo "Eu sou metodo da Classe Conta";
		}
	}

	class Poupanca extends Conta{
		use Operacoes;
	}

	/*$obj = new Conta();
	$obj->depositar(700);
	$obj->verSaldo();
	$obj->sacar(300);
	$obj->verSaldo();*/

	$obj = new Poupanca();
	$obj->mostrarMetodo();
	echo "<hr />";
	$obj2 = new Conta();
	$obj2->mostrarMetodo();