<?php
namespace Controller;
use \Model\UserModel;
use Model\Functions;


defined('ROOTPATH') OR exit('Access Denied!');

/** import the namespace **/

/** 
* Start class
**/

class HomeController 

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
        $data['waste_categories_arr'] = $funct->waste_categories_arr;

     

        $this->view('header',$data); 
	    $this->view($data['page_arr']['link'],$data);
        $this->view('footer');
	
	}


	public function edit($a = '', $b = '', $c = '')
	{
	

	}

}


?>
