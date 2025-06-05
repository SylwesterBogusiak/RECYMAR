<?php
namespace Controller;
use \Model\UserModel;


defined('ROOTPATH') OR exit('Access Denied!');

/** import the namespace **/

/** 
* Logout class
**/

class Logout 

{
        /** import another class **/
        use MainController;   
        
        
	public function index($a = '', $b = '', $c = '')
	{
	



   //$data['lang'] = $funct->get_lang();
      //  $data['page_arr'] = $funct->get_page_title_and_link();

            $ses = new \Core\Session;
        $ses->logout();
        //redirect('start');



        
            
        }
}

?>
