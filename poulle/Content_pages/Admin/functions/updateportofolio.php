<?php

class updatePortofolio extends dbconn{

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
}
 ?>
