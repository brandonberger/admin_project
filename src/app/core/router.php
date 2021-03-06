<?php
	namespace App;

	class Router {

		public function __construct($controller, $action) {
			$controllerClass = ucfirst($controller).'__'.'Controller';
			$controllerDir   = '../app/controller'.DIRECTORY_SEPARATOR;
			$controllerFile  = $controllerDir.$controller.'.php';

			if (!file_exists($controllerFile)) exit;

			$controllerClass = __NAMESPACE__ . '\\' .$controllerClass;

			$controllerClass = new $controllerClass;
			
			// Call Method
			if(isset($action) && !empty($action)) {
				$methodCall = $controllerClass->{$action}();
			}
		}
	}