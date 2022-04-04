<?php

namespace srodek;

class loader {

    public $paths = array();

    public function __construct() {
        spl_autoload_register(function($class) {
            $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
            $fileName = getConf()->_ROOT_PATH . DIRECTORY_SEPARATOR . $class . '.class.php';
            if (is_readable($fileName)) {
                require_once $fileName;
            }
        });
    }

  

}