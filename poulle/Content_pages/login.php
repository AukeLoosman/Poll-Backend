<?php
include_once "../conf.php";
//als er op login wordt geclicked doet ie deze shit en verstuurd hij de inlog gegevens naar de login functie
$Role = -1;
  if(isset($_POST['submit'])){
    $Current = new User();
    $username = $_POST['uname'];
    $password = $_POST['psw'];
    if ($Current->login($username, $password))
    {
      return header("Location: http://localhost/root/poulle/index.php");
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Poule-Home</title>
  <link rel="stylesheet" type="text/css" href="../Style/base.css">
</head>
<body>
<link rel="stylesheet" type="text/css" href="../Style/StyleInlogRegister.css">

<div class="topnav">
  <a  href="../index.php">Home</a>
    <!-- Controle op user Role -->
    <?php if ($Role == 0 || $Role == 1) { ?>
  <a href="Ranking.php" >Ranking</a>
    <?php } if ($Role == 1) { ?>
  <a href="Admin/dashboard.php" >DashBoard</a>
  <?php }?>
  <div class="topnav-right">
    <a href="register.php">SignUp</a>
    <a class="active" href="login.php">SignIn</a>
  </div>
</div><br><br>
<form class="reg_loginform" method="post">
  <div class="logintext">
    <h2>Login</h2>
  </div>
  <div class="imgcontainer" name="imgcontainer">
    <img src="../images/pencil.PNG" alt="Avatar" class="avatar">
  </div>
  <div class="container">
    <label for="uname"><b>Username</b></label>
    <br>
    <input type="text" placeholder="Enter Username" name="uname" required>
    <br>
    <label for="psw"><b>Password</b></label>
    <br>
    <input type="password" placeholder="Enter Password" name="psw" required>
    <button class="reg_login" type="submit" name="submit">Login</button>
  </div>

</form>

</body>
</html>
