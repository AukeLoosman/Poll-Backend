<?php
class userlogin extends dbconn
{
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
          return true && header("Location: ../index.php");
      }
    }
    return false;
  }
}
 ?>
