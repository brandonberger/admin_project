<?php
	namespace App\Controller;
	class MainController {
		// Dashboard 
		public function __construct() {
			// Default stuff 
			// i.e :: call default view
			require_once '../app/view/index.php';
		}

		public function test() {
			echo 'guh';
		}
	}