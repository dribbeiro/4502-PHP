<?php
	namespace Bradesco;
	class Conta{

		protected $titular;
		protected $saldo;
		protected $banco;

		public function depositar($valor){
			$this->saldo += $valor;
		}

		public function getSaldo(){
			return $this->saldo;
		}

		public function getTitular(){
			return $this->titular;
		}

		public function getBanco(){
			return $this->banco;
		}

		public function setTitular($valor){
			$this->titular = $valor;
		}

		public function setBanco($valor){
			$this->banco = $valor;
		}

	}

	class ContaBradesco extends Conta{
		public function __construct(){
			$this->setBanco("Bradesco");
		}
	}

	namespace Itau;
	class ContaItau extends Conta{
		public function __construct(){
			$this->setBanco("Itau");
		}
	}

	$bradesco = new ContaBradesco();
	echo "Banco: {$bradesco->getBanco()} <hr />";

	$itau = new ContaItau();
	echo "Banco: {$itau->getBanco()}";