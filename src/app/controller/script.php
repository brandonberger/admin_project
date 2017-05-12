<?php
	namespace App;
	require_once '../app/build/scripts/hotels.php';
	class ScriptController {
		// Dashboard 
		public function __construct() {
			// Default stuff 
			// i.e :: call default view
			$hs = new Hotels_Script;

			//var_dump($users->getCurrentUser());	

			$output = $hs->getOrders();

			//var_dump($output);


			require_once '../app/view/hotel_script_output.php';

		}
	}