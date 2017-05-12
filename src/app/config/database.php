<?php
	namespace App;
	class Database {

		protected static $host = 'localhost';
		protected static $db   = 'project_1';
		protected static $user = 'root';
		protected static $pass = '';


		private $con = null;

		public function __construct() {
			$this->pdo = self::connect();
		}

		public static function connect() {
			// Database Initiate
			return $pdo = new \PDO('mysql:host='.self::$host.';dbname='.self::$db.';', self::$user, self::$pass);
		}

		public static function find_by_id($id) {
			$query = self::find_by_query("SELECT * FROM ".static::$table ." WHERE id = '$id'");

			return $query;
		}

		public static function find_by_query($sql){
	        $result = self::connect()->query($sql);

	        $result_arr = array();
	        foreach ($result->fetchAll(\PDO::FETCH_ASSOC) as $row) {
	        	$result_arr[] = static::init($row);
	        }
	        return $result_arr;
	    }

	    public static function init($result_row){
	        $calling_class = get_called_class();
	        $the_object = new $calling_class;
	        $object_name = substr($calling_class, strrpos($calling_class, '\\') + 1);
	        foreach($result_row as $the_attribute => $value){
	            if($the_object->check_column_keys($the_attribute)){
	                $the_object->$the_attribute = $value;
	            }
	        }
	        return $the_object;
	    }

        public function check_column_keys($the_attribute){
        	$object_properties = get_object_vars($this);
        	return array_key_exists($the_attribute, $object_properties);
   		}
	}
