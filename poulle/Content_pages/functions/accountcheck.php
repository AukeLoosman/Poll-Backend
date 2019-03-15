<?php
class accdatacheck extends dbconn
{
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
}
 ?>
