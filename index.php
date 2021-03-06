<?php	
/* 
| --------------------------------------------------------------
| 
| Frostbite Framework
|
| --------------------------------------------------------------
|
| Author: 		Steven Wilson
| Copyright:	Copyright (c) 2011, Steven Wilson
| License: 		GNU GPL v3
|
| * You are authorized to change or remove this comment box only
|	in the index.php file.
*/

// Define a smaller Directory seperater and ROOT path
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__FILE__));

// Define full paths to the APP and System Folders
define('APP_PATH', ROOT . DS . 'application');
define('SYSTEM_PATH', ROOT . DS . 'system');

// Include required scripts to run the system
require (SYSTEM_PATH . DS . 'core' . DS . 'Common.php');
require (SYSTEM_PATH . DS . 'core' . DS . 'Registry.php');

// Initiate the system start time
$Benchmark = load_class('Benchmark');
$Benchmark->start('system');

// Initiate the framework and let it do the rest ;)
$Frostbite = load_class('Frostbite');
$Frostbite->Init();
?>