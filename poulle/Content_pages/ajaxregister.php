<?php
include_once "../conf.php";

  $email = $_POST['email'];
  $username = $_POST['uname'];
  $password = $_POST['psw'];

  $user = new accdatacheck();
  $register = new registration();
  $check = $user->accountcheck($username);
  if ($check === "yes") {
    if ($register->register($email, $username, $password)) {
      echo "success";
    }
  }else{
    echo "failed";
  }

 ?>
