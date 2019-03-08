<?php 
include_once "../conf.php";
//tijdelijk
  $Role = -1;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ranking</title>
    <link rel="stylesheet" type="text/css" href="../Style/StyleInlogRegister.css" />
     <link rel="stylesheet" type="text/css" href="../Style/base.css" />
  </head>
<body>

<div class="topnav">
  <a href="../index.php">Home</a>
  <!-- Controle op user Role -->
    <?php if ($Role == 0 || $Role == 1) { ?>
  <a class="active" href="Ranking.php" >Ranking</a>
    <?php } if ($Role == 1) { ?>
  <a href="Admin/dashboard.php" >DashBoard</a>
  <?php }?>
  <div class="topnav-right">
    <a href="register.php">SignUp</a>
    <a href="login.php">SignIn</a>
  </div>
</div>

</body>
</html>