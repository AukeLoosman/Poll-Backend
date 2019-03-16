<?php
class accdatacheck extends dbconn
{
  public function accountcheckUname($username)
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

  public function accountcheckEmail($mail)
  {
    $this->mysqli->real_escape_string($mail);
    $query = 'SELECT * FROM users WHERE Email = "'.$mail.'"';
    $result = $this->mysqli->query($query);

    if($result->num_rows == 0){
      return "yes";
    }else{
      return "no";
    }
  }
}
 ?>
