<?php
	namespace Itau;

class Conta{

		protected $titular;
		protected $saldo;
		protected $banco = "Itau";

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