<?php
	namespace App;
	require_once '../app/config/config.php';
	Config::constants();
	

	require_once '../app/core/router.php';
	(isset($_GET['controller'])) ? $controller = $_GET['controller'] : $controller = 'Main';
	(isset($_GET['action'])) ? $action         = $_GET['action'] : $action = '';

	$router = new Router($controller, $action);
