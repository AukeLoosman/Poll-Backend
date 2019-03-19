<?php
include_once "../conf.php";
//tijdelijk
$current = new userst();
$obj = $current->status();
$Role = $obj;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ranking</title>
     <link rel="stylesheet" type="text/css" href="../Style/base.css" />
     <link rel="stylesheet" href="../css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <script src="../js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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
