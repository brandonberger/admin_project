<?php
	class BuildDatabase {
		
		protected $host = 'localhost';
		protected $db   = 'project_1';
		protected $user = 'root';
		protected $pass = '';

		public function __construct() {
			$this->conn = $this->connect();
			self::pdoExecute($this->createDatabase());
		}

		// Establish Connection
		protected function connect() {
			$con = new PDO('mysql:host='.$this->host.';', $this->user, $this->pass);
			return $con;
		}

		protected function createDatabase() {
			$sql = "CREATE DATABASE ".$this->db;
			return $sql;
		}

		protected function pdoExecute($sql) {
			$this->conn->exec($sql);
		}
	}

	new BuildDatabase();