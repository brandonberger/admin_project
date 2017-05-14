<?php
    function autoload_class($class) {
    	// class type refers to the directory it is in
    	// get class type:
    	$class_type = substr($class, strrpos($class, '_') + 1); 
    	$class_type = strtolower($class_type);

    	// class dir refers to the directory path to the file from public directory
    	// $class initially contains the namespace, this adds the namespace to the directory path 
    	$class_dir = substr($class, 0, strpos($class, '\\') + 1);

    	// $class refers to the actual file name
    	$class = substr($class, strpos($class, '\\') + 1); // gets $class without its namespace
    	$class = str_replace($class_type, '', strtolower($class));  // removes the class type from file name
    	$class = str_replace('__', '', $class); // removes the seperator from the file name

    	switch ($class_type) {
    		case 'controller':
    			$class_dir .= 'controller/';
    		break;
    		case 'script':
    			$class_dir .= 'build/scripts/';
    		break;
    	}

        $file = str_replace('\\', '/', strtolower('../'.$class_dir.$class.'.php'));

        if(!file_exists($file)) {
            return false;
        }
        include_once($file);
    }
    spl_autoload_register('autoload_class');
?>
