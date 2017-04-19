<?php
    //echo getcwd();
    function autoload_class($class) {
        $file = str_replace('\\', '/', strtolower('../'.$class.'.php'));
        if(!file_exists($file)) {
            return false;
        }
        include_once($file);
    }
    spl_autoload_register('autoload_class');
?>
