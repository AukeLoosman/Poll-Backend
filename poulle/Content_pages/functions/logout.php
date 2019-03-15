<?php
class logoutc extends dbconn
{
  public function logout()
  {
  	$logout = false;
  	session_destroy();
  	$_SESSION['obj_log'] = $logout;
  }
}
 ?>
