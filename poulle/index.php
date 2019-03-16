<?php
include_once "conf.php";

$current = new userst();
$obj = $current->status();
$Role = $obj;
?>


<!DOCTYPE html>
<html>
<head>
	<title>Poule-Home</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
		<?php if ($Role == -1){?>
    <a href="Content_pages/register.php">SignUp</a>
    <a href="Content_pages/login.php">SignIn</a>
	<?php  }else{ ?>
		<a href="Content_pages/logout.php">Logout</a>
	<?php } ?>
  </div>
</div>

</body>
</html>
