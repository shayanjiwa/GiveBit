<?php

class Database 
{
	
    public function Db_connection()
    {

       $con = mysqli_connect("localhost","root","","GiveBit");
	// Check connection
		if (mysqli_connect_errno())
  		{
  		echo "Failed to connect to MySQL: " . mysqli_connect_error();
  		}
  		return $con;
    }
    public function is_user_exist($email,$db){
    	$sql = "Select email from user where email = '" .    $email . "'" ;
    	
    	$result = mysqli_query($db,$sql); 
    	if (mysqli_num_rows($result)>0) {
   			 return true;
		} else {
   		 return false;
		}
    }
    public function insert_user($new_user,$db){

    	$sql = "INSERT INTO user (name, email, twitter_id, signup_date) VALUES (";
    	$sql.= "'".implode("','",$new_user)."')";
    	if (mysqli_query($db,$sql) === TRUE) {
   			 return true;
		} else {
   		 return false;
		}

$db->close();
    }
}
?>