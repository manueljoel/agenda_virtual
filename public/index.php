<?php

// Define path to application directory
define('APPLICATION_PATH', substr(realpath(dirname(__FILE__)), 0, -6));

require dirname(__DIR__) . '/vendor/autoload.php';


/**
 * Error and Exception handling
 */
error_reporting(E_ALL);
set_error_handler('Core\Error::errorHandler');
set_exception_handler('Core\Error::exceptionHandler');


/**
 * Routing
 */
require dirname(__DIR__) . '/routes/web.php';