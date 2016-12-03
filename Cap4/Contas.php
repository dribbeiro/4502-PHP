<?php

	class Contas{

		private $saldo = 500;

		public function depositar($valor){
			$this->saldo += $valor;
			return 'Depositado '.$this->saldo;
		}

		public function sacar($valor){
			$this->saldo -= $valor;
			return 'Sacado '.$this->saldo;
		}

	}