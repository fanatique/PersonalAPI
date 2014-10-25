<?php

// The URL under which your Personal API will be available
// including http:// and / at the end, e.g. http://api.stefangrund.de/ or http://localhost:8888/PersonalAPI/
define('BASEURL', 'http://personalapi.dev/');

// The root folder of your Personal API
define('ROOT', $_SERVER['DOCUMENT_ROOT'] . '/');

/* 
	If you run your API under a subdomain this would be the ROOT definiton:
		define('ROOT', $_SERVER['DOCUMENT_ROOT'] . '/');

	If you run it in a specific folder, e.g. in 'localhost/PersonalAPI', this would do it:
   		define('ROOT', $_SERVER['DOCUMENT_ROOT'] . '/PersonalAPI');
*/

// Configuration of your MySQL database
define('DB_HOST', 'localhost'); // Hostname
define('DB_NAME', 'personalapi'); // Database Name
define('DB_USER', 'personalapi'); // Username
define('DB_PASS', 'personalapi'); // Password
define('DB_PORT', '3306'); // Port, default: 3306


// Required files; DO NOT CHANGE!
function __autoload($className) {
    require_once "class_" . $className . ".php";
}

require_once 'global_functions.php';

?>
