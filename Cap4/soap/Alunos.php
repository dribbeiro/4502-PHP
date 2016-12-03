<?php

	class Alunos{

		private $dsn = 'mysql:host=localhost;dbname=rest';
		private $user = 'root';
		private $pass = '123456';

		private $conn;

		public function __construct(){
			$this->conn = new PDO($this->dsn, $this->user, $this->pass);
		}

		public function inserir(array $dados){

			$nome = isset($dados['nome']) ? $dados['nome'] : null;
			$email = isset($dados['email']) ? $dados['email'] : null;

			$query = "INSERT INTO alunos (nome, email) VALUES ('$nome', '$email');";

			return $this->conn->exec($query);

		}

		public function atualizar(array $dados){ //PUT

			$id = isset($dados['id']) ? $dados['id'] : null;
			$nome = isset($dados['nome']) ? $dados['nome'] : null;
			$email = isset($dados['email']) ? $dados['email'] : null;

			$query = "UPDATE alunos SET nome = '$nome', email = '$email' WHERE id = '$id';";

			return $this->conn->exec($query);

		}

		public function deletar(array $dados){ //DELETE

			$id = isset($dados['id']) ? $dados['id'] : null;

			$query = "DELETE FROM alunos WHERE id = '$id';";

			return $this->conn->exec($query);

		}

		public function listarAlunos(){ //GET

			$query = "SELECT * FROM alunos;";

			$retorno = $this->conn->query($query);

			$lista = $retorno->fetchAll(PDO::FETCH_ASSOC);

			return json_encode($lista);

		}

		public function listarPorId($id){ //GET

			$query = "SELECT * FROM alunos WHERE id = '$id';";

			$retorno = $this->conn->query($query);

			$lista = $retorno->fetchAll(PDO::FETCH_ASSOC);

			return json_encode($lista);

		}

	}