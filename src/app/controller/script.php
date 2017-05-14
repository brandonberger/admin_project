<?php
	namespace App;
	class Script__Controller {
		// Dashboard 
		public function __construct() {
			// Default stuff 
			// i.e :: call default view
			require_once '../app/core/autoload_scripts.php';
			//require_once '../app/build/scripts/hotels.php';
			//require_once '../app/build/scripts/customers.php';

			$hs = new Hotels__Script;
			$hotels = $hs->getOrders();

			$c = new Customers__Script;
			$customers = $c->getOrders();

			$p = new Prices__Script;
			$prices = $p->getOrders();



			require_once '../app/view/hotel_script_output.php';

		}
	}