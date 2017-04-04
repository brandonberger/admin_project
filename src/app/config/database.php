<?php
	class Database {

		protected static $host = 'localhost';
		protected static $db   = 'project_1';
		protected static $user = 'root';
		protected static $pass = '';

		//public function __construct() {
		//	self::connect();
		//}

		public static function connect() {
			$pdo = new PDO('mysql:host='.self::$host.';', self::$user, self::$pass);
		}
	}

	//new Database;
