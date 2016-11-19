<?php
	namespace Model;

	use Lib\Db;
	use PDO;
	use Entity\UsuarioEntity;
	class UsuarioModel{

		private $db;

		public function __construct(){
			$pdo = new Db();
			$this->db = $pdo->getConn();
		}

		public function buscarUsuario(UsuarioEntity $usuario){

			$query = 'SELECT login FROM usuarios 
							   	   WHERE login = :login
							       AND senha = :senha;';

			$stmt = $this->db->prepare($query);
			$stmt->bindValue(':login',$usuario->getLogin());
			$stmt->bindValue(':senha',$usuario->getSenha());

			$stmt->execute();

			if($stmt->rowCount()){
				$logado = $stmt->fetch(PDO::FETCH_OBJ);
				return $logado;
			}else{
				return false;
			}

		}

		public function buscarLista(){
			$query = 'SELECT * FROM usuarios;';
			$stmt = $this->db->prepare($query);
			$stmt->execute();

			$registros = $stmt->fetchAll(PDO::FETCH_OBJ);

			return $registros;
		}

	}