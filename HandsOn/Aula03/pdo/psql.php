<?php
	class ConnPSQL{

		private static $conn;

		public static function conectar(){
			self::$conn = new PDO('pgsql:dbname=aulapdo;host=localhost','pdo','123456');

			return self::$conn;
		}
	}