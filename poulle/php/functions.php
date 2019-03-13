<?php
$logout;
class User extends dbconn{

	public function accountcheck($username)
	{
		$this->mysqli->real_escape_string($username);
		$query = 'SELECT * FROM users WHERE Username = "'.$username.'"';
		$result = $this->mysqli->query($query);

		if($result->num_rows == 0){
			return "yes";
		}else{
			return "no";
		}
	}

	public function login($username, $password)
	{
		$this->mysqli->real_escape_string($username);
		$query = 'SELECT * FROM users WHERE Username = "'.$username.'"';
		$result = $this->mysqli->query($query);

		if($result->num_rows == 1){
			$data = $result->fetch_assoc();
			if($password === $data['Password']){

					$object = new session();
					$object->id =  $data['UID'];
					$object->role =  $data['Role'];
					$object->uname =  $data['Username'];
					$logout = true;
					$_SESSION['obj_id'] = $object->id;
					$_SESSION['obj_uname'] = $object->uname;
					$_SESSION['obj_role'] = $object->role;
					$_SESSION['obj_log'] = $logout;
					return true && header("Location: http://localhost/root/poulle/index.php");
			}
		}
		return false;
	}

	public function register($email,$username,$password)
	{
		$query = "INSERT INTO users (Role ,Email , Username, Password) VALUES (0 ,'".$email."','".$username ."','".$password."')";

   		if ($this->mysqli->query($query) === TRUE) {
				$this->login($username,$password);
    	} else {
    	}
	}

public function status(){
	if (isset($_SESSION['obj_log']) === true) {
	if (isset($_SESSION['obj_role']) !== -1) {
		$status = new session();
		$status->role = $_SESSION['obj_role'];
		return $Role = $status->role;
	}
	}else{
		return $Role = -1;
	}
}

public function logout()
{
	$logout = false;
	session_destroy();
	$_SESSION['obj_log'] = $logout;
}
}

class Admin extends dbconn{

	public function updatePorto($username,$old)
	{
		$this->mysqli->real_escape_string($username);
		$query = 'SELECT * FROM users WHERE Username = "'.$username.'"';
		$result = $this->mysqli->query($query);
		if($result->num_rows == 1){
			$data = $result->fetch_assoc();
			if ($data['Portfolio'] != $old) {
				$this->mysqli->real_escape_string($username);
				$query = 'UPDATE users SET Portfolio = "'.$old.'" WHERE Username = "'.$username.'"';
				$result = $this->mysqli->query($query);
				return "success";
			}else{
				return "new and old value dont differ";
			}
		}
	}

	public function search($username)
	{
		$this->mysqli->real_escape_string($username);
		$query = 'SELECT * FROM users WHERE Username = "'.$username.'"';
		$result = $this->mysqli->query($query);
		if($result->num_rows == 1){
			$data = $result->fetch_assoc();
			$user = new useritem();
			$user->uid = $data['UID'];
			$user->username = $data['Username'];
			$user->email = $data['Email'];
			$user->roll = $data['Role'];
			$user->portfolio = $data['Portfolio'];
			return $user;
		}else{
			return "failed";
		}
	}

}
?>
