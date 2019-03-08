<?php 

class User extends dbconn{

	public function login($username, $password)
	{
		$query = 'SELECT * FROM users WHERE Username = "'.$username.'"';
		$result = $this->mysqli->query($query);
		if($result->num_rows == 1){
			$data = $result->fetch_assoc();
			if($password === $data['Password']){
				return true;
			}
		}
		return false;
	}

	public function register($email,$username,$password)
	{
		$query = "INSERT INTO users (Role ,Email , Username, Password) VALUES (0 ,'".$email."','".$username ."','".$password."')";

   		if ($this->mysqli->query($query) === TRUE) {
     		echo "New record created successfully";
    	} else {
     		echo "Error: " . $query . "<br>" . $this->mysqli->error;
    	}
	}

}

?>