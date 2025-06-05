<?php
namespace Controller;
use \Model\UserModel;
use \Model\ProductsModel;
use Model\Functions;


defined('ROOTPATH') OR exit('Access Denied!');

/** import the namespace **/

/** 
* Projects class
**/

class ProductsController

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
         $products = new ProductsModel;

         $data['products'] = $products->get_products_details();


         $this->view('header',$data); 
	      $this->view($data['page_arr']['link'],$data);
         $this->view('footer');
	
	}


	public function edit($a = '', $b = '', $c = '')
	{
	
	
	}

}


?>
