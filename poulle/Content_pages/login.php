<?php 
include_once "../conf.php";
//tijdelijk
  $Role = -1;

//als er op login wordt geclicked doet ie deze shit en verstuurd hij de inlog gegevens naar de login functie
  if(isset($_POST['submit'])){
    $Current = new User();
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($Current->login($username, $password))
    {
      echo "inlog gelukt!";
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
</div>

<form id="inlogcontainer" method="post">
  <div id="container_items">
    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
    <br/><br/>
    <button id="registerlogin" type="submit" name="submit">Login</button>
    <br/><br/>
  </div>
</form>

</body>
</html>