<?php
namespace Controller;
use \Model\UserModel;
use \Model\Search_wasteModel;
use \Model\Functions;


defined('ROOTPATH') OR exit('Access Denied!');

/** import the namespace **/

/** 
* Start class
**/

class Search_wasteController 

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

        $data['ads_types_arr'] = $funct->ads_types_arr;
        $data['publication_dates_arr'] = $funct->publication_dates_arr;
        $data['ads_qty_arr'] = $funct->ads_qty_arr;

        $search_waste = new Search_wasteModel;

       // $db = new Database;
        //$conn = $db->connect();
        $conn = $search_waste->connect();
        $data['waste_items'] = $search_waste->get_waste_items($conn);

        $this->view('header',$data); 
	    $this->view($data['page_arr']['link'],$data);
        $this->view('footer');
	    $search_waste->close($conn);
        
	}


	public function edit($a = '', $b = '', $c = '')
	{
	

	}

}


?>
