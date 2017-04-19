<?php
	namespace App\Model;
	class Database {

		protected static $host = 'localhost';
		protected static $db   = 'project_1';
		protected static $user = 'root';
		protected static $pass = '';

		private $con = null;

		//public function __construct() {
		//	self::connect();
		//}

		public function __construct() {
			$this->pdo = self::connect();
		}

		public static function connect() {
			// Database Initiate
			return $pdo = new \PDO('mysql:host='.self::$host.';dbname='.self::$db.';', self::$user, self::$pass);
		}

		public static function find_by_id($id) {
			$the_result_array = self::find_by_query("SELECT * FROM ".static::$table ." WHERE id = '$id'");
			//self::connect()->exec($sql);
			return $the_result_array;
		}

		public static function find_by_query($sql){
	        $result_set = self::connect()->query($sql);
	        $the_object_array = array();
	        foreach ($result_set->fetchAll(\PDO::FETCH_ASSOC) as $row) {
	        	$the_object_array[] = static::init($row);
	        }
	       // while($row = mysqli_fetch_array($result_set)){
	        //    $the_object_array[] = ;
	        //}
	        return $the_object_array;
	    }

	    public static function init($the_record){
	        $calling_class = get_called_class();
	        $the_object = new $calling_class;
	        $object_name = substr($calling_class, strrpos($calling_class, '\\') + 1);
	        foreach($the_record as $the_attribute => $value){
	            if($the_object->has_the_attribute($the_attribute)){
	                $the_object->$the_attribute = $value;
	            }
	        }
	        return $the_object;
	    }

        public function has_the_attribute($the_attribute){
        	$object_properties = get_object_vars($this);
        	return array_key_exists($the_attribute, $object_properties);
   		}
	}

	//new Database;
