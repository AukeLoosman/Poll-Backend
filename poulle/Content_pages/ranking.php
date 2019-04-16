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
		  <link rel="stylesheet" type="text/css" href="../Style/home.css" />
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 	   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
 	   <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
 	 	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 	 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
 	 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="../css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <script src="../js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  	<script type="text/javascript" charset="utf-8" src="js/jquery.js"></script>
		 <script type="text/javascript" charset="utf-8" src="js/scripie.js"></script>
	</head>
<body>

	<nav class="navbar navbar-expand-md navbar-dark bg-dark" style="" >
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<a class="navbar-brand" href="#">
				<span class="menu-collapsed">Poulle systeem</span>
			</a>
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="../index.php">Home<span class="sr-only">(current)</span></a>
					</li>
					<?php if ($Role == 0 || $Role == 1) { ?>
					<li class="nav-item active">
						<a class="nav-link" href="Ranking.php">Ranking<span class="sr-only">(current)</span></a>
					</li>
					<?php } if ($Role == 1) { ?>
					<li>
						<a class="nav-link" href="Admin/dashboard.php">DashBoard<span class="sr-only">(current)</span></a>
					</li>
					<?php }?>
					<?php if ($Role == -1){?>
					<li>
						<a class="nav-link" href="register.php">SignUp<span class="sr-only">(current)</span></a>
					</li>
					<li>
						<a class="nav-link" href="login.php">SignIn<span class="sr-only">(current)</span></a>
					</li>
				<?php  }else{ ?>
					<a class="nav-link" href="logout.php">Logout<span class="sr-only">(current)</span></a>
				<?php } ?>
				</ul>
			</div>
		</nav>

		<script type="text/template" id="RankingBattle">
		<tr>
			<td id="battle"><button id="thisPo"  ="&nbsp;">lessgooooooo;</button></td>
			<td id="gameID">&nbsp;</td>
		</tr>
		</script>

<!-- Start Template Poulle-->
			<div class="container" style="background-color: #EDEDED;">
				<button id="FSearch2" align="center">
					 Search games
				</button>
				<div id="poullesTable" >
					<table style="width:100%;" id="battless">
				<tr>
					<th>battle</th>
					<th style="width:15%;">gameID</th>
				</tr>
			</table>
			</div>
			</div>
<br><br><br><br><br><br><br>
			<div class="container" style="background-color: #EDEDED;">

				<h1 class="textcenter"><b>Ronde 1</b></h1>

				<div style="width:24.5%;display:inline-block;">
					<div class="card">
						<div class="containercard">
							<h4 class="team" id="team1R1"><b>&nbsp;</b></h4>
								<hr>
						</div>
					</div><br>

				<h4 class="textcenter" id="score1R1"><b></b>&nbsp;</h4>

					<div class="card">
						<div class="containercard">
							<h4 class="team" id="team2R1"><b>&nbsp;</b></h4>
								<hr>
						</div>
					</div>
				</div>

				<div style="width:24.5%;display:inline-block;">
					<div class="card">
						<div class="containercard">
							<h4 class="team" id="team3R1"><b>&nbsp;</b></h4>
								<hr>
						</div>
					</div><br>

				<h4 class="textcenter" id="score2R1"><b></b>&nbsp;</h4>

					<div class="card">
						<div class="containercard">
							<h4 class="team" id="team4R1"><b>&nbsp;</b></h4>
								<hr>
						</div>
					</div>
				</div>

				<div style="width:24.5%; display:inline-block;">
					<div class="card">
					<div class="containercard">
						<h4 class="team" id="team5R1"><b>&nbsp;</h4>
							<hr>
					</div>
				</div><br>
				<h4 class="textcenter" id="score3R1"><b></b>&nbsp;</h4>

			<div class="card">
				<div class="containercard">
					<h4 class="team" id="team6R1"><b>&nbsp;</b></h4>
						<hr>
				</div>
			</div>
		</div>

		<div style="width:24.5%; display:inline-block;">
			<div class="card">
				<div class="containercard">
					<h4 class="team" id="team7R1"><b>&nbsp;</b></h4>
						<hr>
				</div>
			</div><br>

		<h4 class="textcenter" id="score4R1"><b></b>&nbsp;</h4>

			<div class="card">
				<div class="containercard">
					<h4 class="team" id="team8R1"><b>&nbsp;</b></h4>
						<hr>
				</div>
			</div>
		</div>

						<div class="container">

		<h1 class="textcenter"><b>Ronde 2</b></h1>

		<div style="width:49.5%; display:inline-block;">
			<div class="card">
				<div class="containercard">
					<h4 class="team" id="team1R2"><b>&nbsp;</b></h4>
						<hr>
				</div>
			</div><br>

		<h4  class="textcenter" id="score1R2"><b></b>&nbsp;</h4>

			<div class="card">
				<div class="containercard">
					<h4 class="team" id="team2R2"><b>&nbsp;</b></h4>
						<hr>
				</div>
			</div>
		</div>

		<div style="width:49.5%; display:inline-block;">
			<div class="card">
				<div class="containercard">
					<h4 class="team" id="team3R2"><b>&nbsp;</b></h4>
						<hr>
				</div>
			</div><br>

		<h4  class="textcenter" id="score2R2"><b></b>&nbsp;</h4>

			<div class="card">
				<div class="containercard">
					<h4 class="team" id="team4R2"><b>&nbsp;</b></h4>
						<hr>
				</div>
			</div>

		</div>

		</div>

		<div class="container" style="background-color: #EDEDED;">

		<h1 class="textcenter"><b>Ronde 3</b></h1>

		<div style="width:49.5%; margin: auto;" >
		<div class="card">
			<div class="containercard">
				<h4 class="team" id="team1R3"><b>&nbsp;</b></h4>
					<hr>
			</div>
		</div><br>

		<h4  class="textcenter" id="score1R3"><b></b>&nbsp;</h4>

		<div class="card">
			<div class="containercard">
				<h4 class="team" id="team2R3"><b>&nbsp;</b></h4>
					<hr>
			</div>
		</div>
		</div>

		</div>

</div>

</body>
</html>
