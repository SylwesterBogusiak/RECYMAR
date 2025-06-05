<?php
namespace Model;

defined('ROOTPATH') OR exit('Access Denied!');


/**
* UserModel class
**/

class Search_wasteModel


{


	use Model;

	protected $table = 'xyz_items';
	protected $primaryKey = 'id';
	protected $loginUniqueColumn = 'email';
	protected $allowedColumns = [
	'username',
	'email',
	'password',
	
	];
	/**************************************
	* rules include:
		required
		alpha
		email
		numeric
		unique
		symbol
	    not_less_than_8_chars
		alpha_numeric_symbol
		alpha_symbol
		alpha_numeric
	
	*
	***************************************/

	
	protected $validationRules = [
	
	'email' => [
		
		'email',
		'unique',
                'required',
		
	],
	'username' => [
		
		'alpha',
                'required',
	],
		'password' => [
			
			'not_less_than_8_chars',
                        'required',
	
	],
	];
        
        



public function get_waste_items($conn)
{



	return $this->findAll($conn);



}









        
        public function signup($data)
        {
            if($this->validate($data))
        {
        // add extra user columns here
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        $data['date'] = date("Y-m-d H:i:s");
        //$data['date_created'] = date("Y-m-d H:i:s");
        $this->insert($data);
        redirect('login');    
                
        }
            
        }
        
        public function login($data) 
        {
            
            $row = $this->first([$this->loginUniqueColumn => $data[$this->loginUniqueColumn]]);
         
            
            if ($row)
            {
                
            // confirm pasword
                  if(password_verify($data['password'], $row->password))
        {
                      $ses = new \Core\Session;
                      $ses->auth($row);
                      
        redirect('home');    
                
        }
        
        else
            
            
        {
           $this->errors[$this->loginUniqueColumn] = "Wrong $this->loginUniqueColumn or password!";
      
        }
        
            }
        else   
        {
     
 
        $this->errors[$this->loginUniqueColumn] = "Wrong $this->loginUniqueColumn or password!";
     

        }
 
 
 
        }
            

/*

	public function validate($data)
	
{
	$this->errors = [];
	
	if(empty($data['email']))
	
	{
		$this->errors['email'] = "Email is required";
		
	} else
	
	if(!filter_var($data['email'], FILTER_VALIDATE_EMAIL))
	
	{
		$this->errors['email'] = "Email is not valid";
		
	}
	
	if(empty($data['password']))
	
	{
		$this->errors['password'] = "Password is required";
		
	}
	
	if(empty($data['terms']))
	
	{
		$this->errors['terms'] = "Please accept the terms and conditions";
		
	}
	
	if(empty($this->errors))
	{
	
	return true;
	
	}

	return false;
	
}

*/


}

?>
