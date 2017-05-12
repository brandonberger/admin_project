<?php
	namespace App\Model;
	class Clients extends \App\Database {

		protected static $table =  'clients';
		protected static $fields = ['id', 'company'];

		public function __construct() {
			foreach (self::$fields as $field) {
				$this->{$field} = null;
			}
		}

		public function getClient() {
			foreach(self::find_by_id(1) as $key) {
				foreach($key as $col => $val) {
					$this->{$col} = $val;
				}
			}
			//self::find_by_id(1);
		}
	}