<?php
	namespace App;
	class Config {
		
		// Config Constants
		static function constants() {
			define('HOST', 'localhost');
			define('DATABASE', 'project1');
			define('USER', 'root');
			define('PASSWORD', '');
			define('PROJECT_PATH', '/Example_Projects/project1/src/');
		}

		//private function getPath() {
		//	$conf['domain'] = $_SERVER['HTTP_HOST'];
		//	$conf['dir']    = '/Example_Projects/project1/src/';
		//	define('PROJECT_PATH', $conf['dir']);
		//	return PROJECT_PATH;
		//}
	}
