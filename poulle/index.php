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
	<link rel="shortcut icon" href="images/poullebet_Logo.png" type="image/x-icon"/>
	<link rel="stylesheet" type="text/css" href="Style/home.css">
	<link rel="stylesheet" type="text/css" href="Style/base.css">
	<link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body style=" background-size: 100%;background-image: url('images/backgroundindex.png'); background-repeat: no-repeat; background-size: cover;">

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

<div class="Home">

</div>
</body>
</html>
