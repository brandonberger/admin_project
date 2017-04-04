<?php
	namespace App;

	class Router {

		public function __construct($controller, $action) {
			$controllerClass = ucfirst($controller).'Controller';
			$controllerDir   = '../app/controller'.DIRECTORY_SEPARATOR;
			$controllerFile  = $controllerDir.$controller.'.php';

			if (!file_exists($controllerFile)) exit; 
			require_once $controllerFile;

			$controllerClass  = new Controller\MainController;
			
			// Call Method
			if(isset($action)) {
				$methodCall = $controllerClass->{$action}();
			}
		}
	}