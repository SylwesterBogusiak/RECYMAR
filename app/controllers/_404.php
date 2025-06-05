<?php
namespace Controller;
use \Model\UserModel;
use Model\Functions;


defined('ROOTPATH') OR exit('Access Denied!');


/** 
* 404 class
**/


class _404 

{
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

			 
			 $this->view('header',$data);  
			 $this->view('_404',$data);
			 $this->view('footer');
		
		}
	
	
		public function edit($a = '', $b = '', $c = '')
		{
		
	
		
		}


}


?>
