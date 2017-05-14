<?php
	namespace App;
	class Script__Controller {
		// Dashboard 
		public function __construct() {
			// These scripts pull data from messy table
			// to be formated and inserted into a new table 

			$hs = new Hotels__Script;
			$hotels = $hs->getOrders();

			$c = new Customers__Script;
			$customers = $c->getOrders();

			$p = new Prices__Script;
			$prices = $p->getOrders();



			require_once '../app/view/hotel_script_output.php';

		}
	}