<?php

defined('ROOTPATH') OR exit('Access Denied!');


if ($_SERVER['SERVER_NAME'] == 'recymar.test')

{

/** database config **/

define('DBNAME', 'db_name');
define('DBHOST', 'localhost');
define('DBUSER', 'root');
define('DBPASS', 'xyz');
define('DBDRIVER', '');

define('ROOT', 'http://recymar.test');
}

else

{

/** database config **/

define('DBNAME', 'db_name');
define('DBHOST', 'localhost');
define('DBUSER', 'root');
define('DBPASS', '');
define('DBDRIVER', '');

define('ROOT', 'https://recymar.pl');
}



define('APP_NAME', "RECYMAR");
define('APP_DESC', "Free market for exchange of waste and recycling equipment and machines, and a directory of companies from the waste industry.");

/** true means show errors **/

define('DEBUG', true);
//define('DEBUG', false);
?>
