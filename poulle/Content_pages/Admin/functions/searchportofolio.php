<?php
class searchporto extends dbconn
{
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
