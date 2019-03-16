<?php
include_once "../conf.php";

  $email = $_POST['email'];
  $username = $_POST['uname'];
  $password = $_POST['psw'];
  $hashed = hash('sha256', $password);

  $user = new accdatacheck();
  $register = new registration();
  $check = $user->accountcheckUname($username);
  if ($check === "yes") {
    $echeck = $user->accountcheckEmail($email);
    if ($echeck === "yes") {
      $register->register($email, $username, $hashed);
      echo "registered";

    }
    if ($echeck === "no") {
      echo "emailfailed";
    }
  }if ($check === "no"){
    echo "failed";
  }
 ?>
