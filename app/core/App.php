<?php

defined('ROOTPATH') OR exit('Access Denied!');

/** 
* App class
**/

class App
{
private $controller = 'Home';
private $method = 'index';


private function splitURL()
{
$URL = $_GET['url'] ?? 'home';

$URL = explode('/',trim($URL,"/"));

return $URL;

}

public function loadController()

{



$URL = $this->splitURL();


$ctrl = ucfirst($URL[0]) . "Controller";

$ctrl = str_replace('-', '_', $ctrl);



/** select controller **/
$filename = "./app/controllers/" .$ctrl .".php";

if (file_exists($filename))
{

require $filename;
$this->controller = $ctrl;
unset($URL[0]);

}
else


{

/** select controller **/
$filename = "./app/controllers/" .$ctrl . "/" . $ctrl .".php";

if (file_exists($filename))
{

require $filename;
$this->controller = $ctrl;
unset($URL[0]);
unset($ctrl);

}
else
{

$filename = "./app/controllers/_404.php";
require $filename;
$this->controller = "_404";

}

}


///show($URL);
////$mycontroller = '\Controller\\'.$this->controller;
	
$controller = new ('\Controller\\'.$this->controller);

/** select method **/


if(!empty($URL[1]))

{
if(method_exists($controller, $URL[1]))

{

$this->method = $URL[1];
unset($URL[1]);
}



}





///show($URL);


//$start->index();
call_user_func_array([$controller,$this->method],$URL);









}


}


?>
