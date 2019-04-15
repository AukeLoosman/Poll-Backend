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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<link rel="shortcut icon" href="images/poullebet_Logo.png" type="image/x-icon"/>
	<link rel="stylesheet" type="text/css" href="Style/home.css">
	<link rel="stylesheet" type="text/css" href="Style/base.css">
	<link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body style="padding:0; margin:0;">

	<nav class="navbar navbar-expand-md navbar-dark bg-primary" style="" >
	  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <a class="navbar-brand" href="#">
	    <span class="menu-collapsed">Poulle systeem</span>
	  </a>
	  <div class="collapse navbar-collapse" id="navbarNavDropdown">
	    <ul class="navbar-nav">
	      <li class="nav-item active">
	        <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
	      </li>
				<?php if ($Role == 0 || $Role == 1) { ?>
				<li class="nav-item active">
	        <a class="nav-link" href="Content_pages/Ranking.php">Ranking<span class="sr-only">(current)</span></a>
	      </li>
				<?php } if ($Role == 1) { ?>
				<li>
					<a class="nav-link" href="Content_pages/Admin/dashboard.php">DashBoard<span class="sr-only">(current)</span></a>
				</li>
				<?php }?>
				<?php if ($Role == -1){?>
				<li>
					<a class="nav-link" class="topnav-right" href="Content_pages/register.php">SignUp<span class="sr-only">(current)</span></a>
				</li>
				<li>
					<a class="nav-link" class="topnav-right" href="Content_pages/login.php">SignIn<span class="sr-only">(current)</span></a>
				</li>
			<?php  }else{ ?>
				<a class="nav-link" class="topnav-right" href="Content_pages/logout.php">Logout<span class="sr-only">(current)</span></a>
			<?php } ?>
 			</ul>
	  </div>
	</nav>
<br>

<div class="container" style="background-color: #EDEDED;">

	<h1 class="textcenter"><b>Ronde 1</b></h1>

	<div style="width:24.5%;display:inline-block;">
		<div class="card">
			<div class="containercard">
				<h4 class="team"><b>TEAM</b></h4>
					<hr>
				<h4 class="textcenter"><b>123456789012</b></h4>
			</div>
		</div><br>

	<h4 class="textcenter"><b></b>0 - 0</h4>

		<div class="card">
			<div class="containercard">
				<h4 class="team"><b>TEAM</b></h4>
					<hr>
				<h4 class="textcenter"><b>123456789012</b></h4>
			</div>
		</div>
	</div>

	<div style="width:24.5%;display:inline-block;">
		<div class="card">
			<div class="containercard">
				<h4 class="team"><b>TEAM</b></h4>
					<hr>
				<h4 class="textcenter"><b>123456789012</b></h4>
			</div>
		</div><br>

	<h4 class="textcenter"><b></b>0 - 0</h4>

		<div class="card">
			<div class="containercard">
				<h4 class="team"><b>TEAM</b></h4>
					<hr>
				<h4 class="textcenter"><b>123456789012</b></h4>
			</div>
		</div>
	</div>

	<div style="width:24.5%; display:inline-block;">
		<div class="card">
		<div class="containercard">
			<h4 class="team"><b>TEAM</b></h4>
				<hr>
			<h4 class="textcenter"><b>123456789012</b></h4>
		</div>
	</div><br>

	<h4 class="textcenter"><b></b>0 - 0</h4>

		<div class="card">
			<div class="containercard">
				<h4 class="team"><b>TEAM</b></h4>
					<hr>
				<h4 class="textcenter"><b>123456789012</b></h4>
			</div>
		</div>
	</div>

	<div style="width:24.5%; display:inline-block;">
		<div class="card">
			<div class="containercard">
				<h4 class="team"><b>TEAM</b></h4>
					<hr>
				<h4 class="textcenter"><b>123456789012</b></h4>
			</div>
		</div><br>

	<h4 class="textcenter"><b></b>0 - 0</h4>

		<div class="card">
			<div class="containercard">
				<h4 class="team"><b>TEAM</b></h4>
					<hr>
				<h4 class="textcenter"><b>123456789012</b></h4>
			</div>
		</div>
	</div>
</div>

<div class="container">

<h1 class="textcenter"><b>Ronde 2</b></h1>

<div style="width:49.5%; display:inline-block;">
	<div class="card">
		<div class="containercard">
			<h4 class="team"><b>TEAM</b></h4>
				<hr>
			<h4  class="textcenter"><b>123456789012</b></h4>
		</div>
	</div><br>

<h4  class="textcenter"><b></b>0 - 0</h4>

	<div class="card">
		<div class="containercard">
			<h4 class="team"><b>TEAM</b></h4>
				<hr>
			<h4  class="textcenter"><b>123456789012</b></h4>
		</div>
	</div>
</div>

<div style="width:49.5%; display:inline-block;">
	<div class="card">
		<div class="containercard">
			<h4 class="team"><b>TEAM</b></h4>
				<hr>
			<h4  class="textcenter"><b>123456789012</b></h4>
		</div>
	</div><br>

<h4  class="textcenter"><b></b>0 - 0</h4>

	<div class="card">
		<div class="containercard">
			<h4 class="team"><b>TEAM</b></h4>
				<hr>
			<h4  class="textcenter"><b>123456789012</b></h4>
		</div>
	</div>
</div>

</div>

<div class="container" style="background-color: #EDEDED;">

<h1 class="textcenter"><b>Ronde 3</b></h1>

<div style="width:49.5%; margin: auto;" >
	<div class="card">
		<div class="containercard">
			<h4 class="team"><b>TEAM</b></h4>
				<hr>
			<h4  class="textcenter"><b>123456789012</b></h4>
		</div>
	</div><br>

<h4  class="textcenter"><b></b>0 - 0</h4>

	<div class="card">
		<div class="containercard">
			<h4 class="team"><b>TEAM</b></h4>
				<hr>
			<h4  class="textcenter"><b>123456789012</b></h4>
		</div>
	</div>
</div>

</div>

<div class="container" style="background-color: #EDEDED;">

<h1 class="textcenter"><b>Winnaar!!</b></h1>

<div style="width:49.5%; margin: auto;" >
	<div class="card">
		<div class="containercard">
			<h4 class="team"><b>TEAM</b></h4>
				<hr>
			<h4  class="textcenter"><b>123456789012</b></h4>
		</div>
	</div><br>
</div>

</div>





</body>
</html>
