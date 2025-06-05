<?php

namespace Model;

defined('ROOTPATH') OR exit('Access Denied!');

 
/**
* Database trait
**/

trait Database

{





// Database connection details
public $host = DBHOST; 
public $username = DBUSER; 
public $password = DBPASS;
public $database = DBNAME; 
public $conn; 




public function connect()
{

   
    // Create a connection
//$conn = new mysqli($host, $username, $password, $database);
$conn = mysqli_connect($this->host, $this->username, $this->password, $this->database);

// Check connection


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
};


return $conn;

}



public function query($conn, $query, $data = [])

{

  //  $sql = "SELECT * FROM $table";
    $result = $conn->query($query);
    $data = array();
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }
    return $data;



}



// Function to fetch all data from the database
public function getData($conn, $table) {
    $sql = "SELECT * FROM $table";
    $result = $conn->query($sql);
    $data = array();
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }
    return $data;
}




public function close($conn)
{

$conn->close(); 
return 0;

}





/*

// Function to fetch all data from the database
function getData($conn) {
    $sql = "SELECT * FROM data";
    $result = $conn->query($sql);
    $data = array();
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }
    return $data;
}

// Function to insert data into the database
function insertData($conn, $name, $email, $phone) {
    $sql = "INSERT INTO data (name, email, phone) VALUES ('$name', '$email', '$phone')";
    if ($conn->query($sql) === TRUE) {
        return true;
    } else {
        return false;
    }
}

// Function to update data in the database
function updateData($conn, $id, $name, $email, $phone) {
    $sql = "UPDATE data SET name='$name', email='$email', phone='$phone' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        return true;
    } else {
        return false;
    }
}

// Function to delete data from the database
function deleteData($conn, $id) {
    $sql = "DELETE FROM data WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        return true;
    } else {
        return false;
    }
}


*/





/*


	private function connect()
	
	
	{
	
	$string = "mysql:hostname=".DBHOST.";dbname=".DBNAME;
	$con = new \PDO($string,DBUSER,DBPASS);

	//show($con);

	
	return $con;
	
	}

	public function query($query, $data = [])
	
	{
	$con = $this->connect();
	
	$stm = $con->prepare($query);
	
	$check = $stm->execute($data);
	
	if($check)
	
	{
	 $result = $stm->fetchAll(\PDO::FETCH_OBJ);
	 if(is_array($result) && count($result))
	 
	 	{
	 	
	 	return $result;
	 	
	 	
	 	}
	
	
	
	}
	
	
	return false;
	
	
	
	}
	
	
	
	
	
	public function get_row($query, $data = [])
	
	{
	$con = $this->connect();
	
	$stm = $con->prepare($query);
	
	$check = $stm->execute($data);
	
	if($check)
	
	{
	 $result = $stm->fetchAll(\PDO::FETCH_OBJ);
	 if(is_array($result) && count($result))
	 
	 	{
	 	
	 	return $result[0];
	 	
	 	
	 	}
	
	
	
	}
	
	
	return false;
	
	
	
	}
	
	
	
	*/


	
	
	
	
	
	
	
	
	
}

?>
