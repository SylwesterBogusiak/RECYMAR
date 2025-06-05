<?php
namespace Controller;
use \Model\UserModel;
use Model\Functions;
use Model\ContactFormModel;


defined('ROOTPATH') OR exit('Access Denied!');

/** import the namespace **/

/** 
* Contact class
**/

class ContactController

{
        /** import another class **/
        use MainController;   
        
        
	public function index($a = '', $b = '', $c = '')
	{
	
        //$data= [];
            /*
        $ses =new \Core\Session;
        if(!$ses->is_logged_in())
        {
            
           redirect('login');
        }
            */
            
         $data = array();
         $funct = new Functions;
         
         $data['lang'] = $funct->get_lang();
         $data['page_arr'] = $funct->get_page_title_and_link();


         $data['form'] = new ContactFormModel;
         $req = new \Core\Request;
         
         if ($req->posted())
         { 
             $data['form']->send_data($_POST);
         }


         $this->view('header',$data); 
	    $this->view($data['page_arr']['link'],$data);
         $this->view('footer');
	
	}


	public function edit($a = '', $b = '', $c = '')
	{
	

	
	}

}


?>
