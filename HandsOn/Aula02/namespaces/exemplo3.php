<?php
 	namespace Bradesco;
 	class Conta{
 		protected $banco = "Bradesco";

 		public function getBanco(){
 			return $this->banco;
 		}
 	}
 	//Fim NAMESPACE BRADESCO
 	namespace Itau;
 	class Conta{
 		protected $banco = "Itau";

 		public function getBanco(){
 			return $this->banco;
 		}
 	}

 	use \Bradesco as ContaBradesco;
 	$bradesco = new ContaBradesco\Conta();
 	//$bradesco = new \Bradesco\Conta();
 	echo "Banco: {$bradesco->getBanco()} <hr />";

 	$itau = new Conta();
 	echo "Banco: {$itau->getBanco()}";
