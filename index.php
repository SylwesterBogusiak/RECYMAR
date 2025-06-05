<?php

session_start();


/** Valid PHP Version check **/

$minPHPVersion = '8.0';

if (phpversion() < $minPHPVersion)
    
{
    
    die ("Your PHP version must be {$minPHPVersion} or higher to run this app. You current version is " . phpversion());
    
}



/** Path to this file **/
define('ROOTPATH', __DIR__ . DIRECTORY_SEPARATOR);

//echo ROOTPATH;


require ("./app/core/init.php");

/*
if(DEBUG)

{
	ini_set('display_errors',1);
}
else

{
	ini_set('display_errors',0);
}

*/


DEBUG ? ini_set('display_errors',1) : ini_set('display_errors',0);


$app = new App;



//show($_GET);


$app->loadController();

//show(splitURL());

?>
