<?php
	namespace app;

	class Prices__Script extends Database {
		protected static $table = 'temp_db_orders';
		protected static $cols = ['price'];

		public function __construct() {
			foreach (self::$cols as $col) {
				$this->{$col} = null;
			}
		}

		public function getOrders() {
			$query = self::find_by_query("SELECT * FROM ". self::$table." LIMIT 100");
			foreach ($query as $ind => $obj) {
				foreach ($obj as $key => $value) {
					$this->{$key}[] = $value;
				}
			}
		}
	}