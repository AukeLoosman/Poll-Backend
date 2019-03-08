<?php 
include_once "conf.php";
//tijdelijk
	$Role = -1;
?>


<!DOCTYPE html>
<html>
<head>
	<title>Poule-Home</title>
	<link rel="stylesheet" type="text/css" href="Style/home.css">
	<link rel="stylesheet" type="text/css" href="Style/base.css">
</head>

<body>

<div class="topnav">
  <a class="active" href="index.php">Home</a>
  <!-- Controle op user Role -->
    <?php if ($Role == 0 || $Role == 1) { ?>
  <a href="Content_pages/Ranking.php" >Ranking</a>
    <?php } if ($Role == 1) { ?>
  <a href="Content_pages/Admin/dashboard.php" >DashBoard</a>
	<?php }?>
  <div class="topnav-right">
    <a href="Content_pages/register.php">SignUp</a>
    <a href="Content_pages/login.php">SignIn</a>
  </div>
</div>

</body>
</html>