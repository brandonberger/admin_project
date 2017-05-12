<?php
	namespace App;
	class MainController {
		// Dashboard 
		public function __construct() {
			// Default stuff 
			// i.e :: call default view
			$user = new Model\Users;
			$client = new Model\Clients;

			//var_dump($users->getCurrentUser());	

			$user->getCurrentUser();
			$client->getClient();
			require_once '../app/view/index.php';

		}
	}