<?php
namespace Controller;
use \Model\UserModel;
use Model\Functions;


defined('ROOTPATH') OR exit('Access Denied!');

/** import the namespace **/

/** 
* Signup class
**/

class Signup 

{
        /** import another class **/
        use MainController;   
        
        
	public function index($a = '', $b = '', $c = '')
	{
	
	/*
	show("from the index function");
       show($a);
       show($b);
       show($c);
        */
	///echo "This is the start controller";
	//$data['username'] = empty($_SESSION['USER']) ? 'User' : $_SESSION['USER']->email;
            //$data = [];


        $data = array();
       

        $funct = new Functions;
        
        $data['lang'] = $funct->get_lang();
        $data['page_arr'] = $funct->get_page_title_and_link();
        
            $data['user'] = new \Model\UserModel;
            $req = new \Core\Request;
            
            if ($req->posted())
            {
                
            
          
                
                $data['user']->signup($_POST);
            }
        
        //$data['user'] = $user;
	     
        $this->view('header',$data); 
        $this->view($data['page_arr']['link'],$data);
        $this->view('footer');
	}


	public function edit($a = '', $b = '', $c = '')
	{
	
	
	}

}


?>
