<?php

namespace Model;

defined('ROOTPATH') OR exit('Access Denied!');


/** 
* Main Model trait
**/


trait Model 
{	

	use Database;
	////protected $table = 'users';
	protected $limit = 10;
	protected $offset = 0;
	protected $order_type = "desc";
	protected $order_column = "item_index";
	public $errors = [];
	
	
	function test()
	
	{
	 
	$query = "SELECT * FROM users";
	$result = $this->query($conn, $query);
	
	//show($result);
	
	
	}
	
	public function findAll($conn)
	
	{
	
	$query = "select * from $this->table order by $this->order_column $this->order_type limit $this->limit offset $this->offset";
	$result = $this->query($conn, $query);
	
	//show($result);
	
	return $result;

	}
	
	
	public function where($data, $data_not = [])
	{
	
	$keys = array_keys($data);
	
	$keys_not = array_keys($data_not);
	
	
	$query = "select * from $this->table where ";
	
	foreach ($keys as $key)
	
	{
	
	$query .= $key . " = :". $key . " && ";
	
	}
	
	foreach ($keys_not as $key)
	
	{
	
	$query .= $key . " != :". $key . " && ";
	
	}
	
	$query = trim($query, " && ");
	
	
	$query .= " order by $this->order_column $this->order_type limit $this->limit offset $this->offset";
	
	///echo $query;
	
	$data = array_merge($data, $data_not);
	
	return $this->query($query, $data);
	
		
	}
	
	
	public function first($data, $data_not = [])
	{
	
	
	$keys = array_keys($data);
	
	$keys_not = array_keys($data_not);
	
	
	$query = "select * from $this->table where ";
	
	foreach ($keys as $key)
	
	{
	
	$query .= $key . " = :". $key . " && ";
	
	}
	
	foreach ($keys_not as $key)
	
	{
	
	$query .= $key . " != :". $key . " && ";
	
	}
	
	$query = trim($query, " && ");
	
	
	$query .= " limit $this->limit offset $this->offset";
	
	///echo $query;
	
	$data = array_merge($data, $data_not);
	
	$result = $this->query($query, $data);
	
	if($result)
	return $result[0];
	
	return false;
	
	
	}
	
	public function insert($data)
	{
	
	
	/** remove unwanted data **/
	
	if (!empty($this->allowedColumns))
	{
	
	foreach ($data as $key => $value)
	{
	if(!in_array($key,$this->allowedColumns))
	
	{
	unset($data[$key]);
	
	}

	} 

	}
	
	 
	
	$keys = array_keys($data);
	$query = "insert into $this->table (".implode(",", $keys).") values (:". implode(",:", $keys).")";
	
	$result = $this->query($query, $data);
	
	return false;
	
	
	}

	public function update($id, $data, $id_column = 'id')
	{
	
	
	/** remove unwanted data **/
	
	if (!empty($this->allowedColumns))
	{
	
	foreach ($data as $key => $value)
	{
	if(!in_array($key,$this->allowedColumns))
	
	{
	unset($data[$key]);
	
	}

	} 

	}
	
	
	
	
	
	$keys = array_keys($data);
	
	
	
	$query = "update $this->table set ";
	
	foreach ($keys as $key)
	
	{
	
	$query .= $key . " = :". $key . ", ";
	
	}
	
	
	
	$query = trim($query, ", ");
	
	
	$query .= " where $id_column = :$id_column ";
	$data[$id_column] = $id;
	//echo $query;
	
	
	$this->query($query, $data);
	
	return false;
	
	
	
	
	
	}
	
	public function delete($id, $id_column = 'id')
	{
	//$keys = array_keys($data);
	
	$data[$id_column] = $id;
	
	$query = "delete from $this->table where $id_column = :$id_column ";
	//echo $query;
	$result = $this->query($query, $data);
	
	return false;
	
	}
	
	protected function getPrimaryKey()
		
		
	{
		
	return $this->primaryKey ?? 'id';	
		
	}
	
	public function getError($key)
	{
		
		if (!empty($this->errors[$key]))
		{
			return $this->errors[$key];
			
		}
		return "";	
	}
	
	public function validate($data)
		{
		$this->errors = [];
			
		if(!empty($this->validationRules))
		{
		 	foreach($this->validationRules as $column => $rules)
				
			{
                            
                            
                            if(!isset($data[$column]))
                                
                            {
               
                                continue;
                            }
				foreach($rules as $rule)
				{
					switch ($rule)
					{
							
						case 'required':
							
							if(empty($data[$column]))
							{
							$this->errors[$column] = ucfirst($column) . " is required!"; 
							}
							
							break;
							
						case 'email':
							
							if(!filter_var(trim($data[$column]), FILTER_VALIDATE_EMAIL))
							{
							$this->errors[$column] = "Invalid email address!"; 
							}
							
							break;
							
							
                                                case 'alpha':
							
							if(!preg_match("/^[a-zA-Z]+$/", trim($data[$column])))
							{
							$this->errors[$column] = ucfirst($column) . " has illegal characters!";  
							}
							
							break;
                                                        
						case 'alpha_space':
							
							if(!preg_match("/^[a-zA-Z ]+$/", trim($data[$column])))
							{
							$this->errors[$column] = ucfirst($column) . " has illegal characters!";  
							}
							
							break;
							
						case 'alpha_numeric':
							
							if(!preg_match("/^[a-zA-Z0-9]+$/", trim($data[$column])))
							{
							$this->errors[$column] = ucfirst($column) . " has illegal characters!"; 
							}
							
							break;
						
						case 'alpha_numeric_symbol':
							
							if(!preg_match("/^[a-zA-Z0-9\-\_\& ]+$/", trim($data[$column])))
							{
							$this->errors[$column] = ucfirst($column) ." has illegal characters!"; 
							}
							
							break;
						
						case 'alpha_symbol':
							
							if(!preg_match("/^[a-zA-Z0-9\-\_\& ]+$/", trim($data[$column])))
							{
							$this->errors[$column] = ucfirst($column) ." has illegal characters!"; 
							}
							
							break;
							
							
						case 'not_less_than_8_chars':
							
							if(strlen(trim($data[$column])) < 8)
							{
							$this->errors[$column] = ucfirst($column) . " should not be less than 8 characters!"; 
							}
							
							break;
							
							
						case 'unique':
							
							$key = $this->getPrimaryKey();
							if(!empty($data[$key]))
							{
							// edit mode
									if($his->first([$column => $data[$column]],[$key=>$data[$key]]))
							{
							$this->errors[$column] = ucfirst($column) . " should be unique!"; 
							}
							
								
							}
							else
								
							{
							// insert mode	
								
									if($this->first([$column => $data[$column]]))
							{
							$this->errors[$column] = ucfirst($column) . " should be unique!"; 
							}
							
								
							}
								
								
								
						
							break;
							
							
						default:
							$this->errors['rules'] = "The rule " . $rule . " was not found!"; 
							break;
							
							
					}
					
					
					
					
				}
				
				
				
				
			}
		}	
			
			
		if(empty($this->errors))
		{
		return true;	
		}
			return false;
                        
                        
                        
                }

}

?>
