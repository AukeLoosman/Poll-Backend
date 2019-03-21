<?php
class Livesearch extends dbconn
{
  public function Live($use)
  {
    $Query = "SELECT * FROM users WHERE Username LIKE '%".$use."%' ";
    $result = $this->mysqli->query($Query);
    $array = array();

    if($result->num_rows >= 0){
      while($data = $result->fetch_assoc()){
        $user = new useritem();
        $user->uid = $data['UID'];
        $user->username = $data['Username'];
        $user->password = $data['Password'];
        $user->email = $data['Email'];
        $user->portfolio = $data['Portfolio'];
        $array[] = $user;
      }
      return  $array;
    }else{
      return false;
    }
  }
}


 ?>
