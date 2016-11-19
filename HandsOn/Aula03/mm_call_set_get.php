<?php
	class Usuarios{
		public $nome;
		public $email;

		public function __call($method, $vars){
			$prefix = substr($method,0,3);
			$attr = strtolower(substr($method,3));
			if($prefix == 'get'){
				return $this->$attr;
			}else if($prefix == 'set'){
				$this->$attr = $vars[0];
			}
			
		}
	}

	$obj = new Usuarios();
	$obj->setNome('Nome User');
	$obj->setEmail('Email user');
	echo "Nome: {$obj->getNome()} <br />";
	echo "Email: {$obj->getEmail()}";