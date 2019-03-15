<?php
class userst extends dbconn
{
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
}
 ?>
