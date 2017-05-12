<?php
	namespace App\Model;
	class Users extends \App\Database{

		protected static $table = 'users';
		protected static $fields = ['id', 'username', 'email', 'first_name'];

		public function __construct() {

			foreach (self::$fields as $field) {
				$this->{$field} = null;
			}
		}

		public function getCurrentUser() {
			foreach(self::find_by_id(1) as $key) {
				foreach($key as $col => $val) {
					$this->{$col} = $val;
				}
			}
			//self::find_by_id(1);
		}
	}