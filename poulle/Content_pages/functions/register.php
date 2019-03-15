<?php
class registration extends dbconn
{
  public function register($email,$username,$password)
  {
    $query = "INSERT INTO users (Role ,Email , Username, Password) VALUES (0 ,'".$email."','".$username ."','".$password."')";

      if ($this->mysqli->query($query) === TRUE) {
        $user = new userlogin();
        $user->login($username,$password);
      } else {
      }
  }
}
 ?>
