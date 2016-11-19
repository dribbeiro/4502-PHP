<?php
	namespace Lib;

	use PDO;
	class Db{
		private static $db;

	    public static function getConn() {
	        if (!isset(self::$db)) {
	            self::$db = new PDO('mysql:dbname=aulapdo;host=localhost;','root','123456');
	            self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	        }
	        return self::$db;
	    }

	}
