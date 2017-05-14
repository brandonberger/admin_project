<?php
	namespace app;

	class Customers__Script extends Database {
		protected static $table = 'temp_db_orders';
		protected static $cols = ['people'];

		public function __construct() {
			foreach (self::$cols as $col) {
				$this->{$col} = null;
			}
		}

		public function getOrders() {
			$query = self::find_by_query("SELECT * FROM ". self::$table." LIMIT 100");
			foreach ($query as $ind => $obj) {
				foreach ($obj as $key => $value) {
					$value = substr($value, 0, strpos($value, ' '));
					if (empty($value)) {
						$value = 2;
					}

					$this->{$key}[] = $value;
				}
			}
		}
	}