<?php

//require_once 'lib/Template.php';

session_start();

require_once 'config.php';

require_once 'helpers/helper.php';

// Autoloader
function __autoload($class_name){
    require_once 'lib/'.$class_name.'.php';
}

