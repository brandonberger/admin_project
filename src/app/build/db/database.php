<?php
	class BuildDatabase {
		
		protected $host = 'localhost';
		protected $db   = 'project_1';
		protected $user = 'root';
		protected $pass = '';

		public function __construct() {
			$this->conn = $this->connect();
			self::pdoExecute($this->createDatabase());
			//var_dump($this->createTables());
			self::pdoExecute($this->createTables());
		}

		// Establish Connection
		protected function connect() {
			$con = new PDO('mysql:host='.$this->host.';dbname=project_1', $this->user, $this->pass);
			return $con;
		}

		protected function createDatabase() {
			$sql = "CREATE DATABASE ".$this->db;
			return $sql;
		}

		protected function createTables() {

		    $sql = "CREATE TABLE orders (
		    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
		    hotel_name VARCHAR(50) NOT NULL,
		    customers INT(2) NOT NULL,
			price_paid DECIMAL(5, 2) NOT NULL,
			cruise VARCHAR(50) NOT NULL,
			first_name VARCHAR(30) NOT NULL,
			last_name VARCHAR(30) NOT NULL,
			city VARCHAR(30) NOT NULL,
			state VARCHAR(30) NOT NULL,
			date_of_sale DATETIME NOT NULL,
			notes TEXT NULL
		    )";

		    return $sql;

		}

		protected function pdoExecute($sql) {
			$this->conn->exec($sql);
		}
	}

	new BuildDatabase();