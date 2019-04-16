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
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<link rel="shortcut icon" href="images/poullebet_Logo.png" type="image/x-icon"/>
	<link rel="stylesheet" type="text/css" href="Style/home.css">
	<link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body style="padding:0; margin:0;">


		<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
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
					<li class="nav-item">
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
	<div id="myCarousel" class="carousel slide" data-ride="carousel">

        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide" src="images/mountain.jpg" alt="First slide">
            <div class="container">
              <div class="carousel-caption text-left">
                <h1>BACKEND PROGRAMMING</h1>
                <p>POULE SYSTEEM</p>

              </div>
            </div>
          </div>


        </div>


      </div>

	<div class="container marketing">
		<h2 class="textcenter featurette-heading1 test 	">Deelnemers</h2><br>
	        <div class="row">
	          <div class="col-lg-4">
	            <img  class="rounded-circle" src="images/Auke.png" alt="auke" width="140" height="140">
	            <h2>Leerling</h2>
	            <p>Auke Loosman<br>Klas: ICTOM2A</p>
	          </div>
	          <div class="col-lg-4">
	            <img class="rounded-circle" src="images/david.jpg" alt="david" width="140" height="140">
	            <h2>Leraar</h2>
	            <p>David Kwakernaak<br>Instructeur</p>
	          </div>
	          <div class="col-lg-4">
	            <img class="rounded-circle" src="images/matthijs.jpg" alt="matthijs" width="140" height="140">
	            <h2>Leerling</h2>
	            <p>Matthijs van Benthem<br>Klas: ICTOM2A</p>
	          </div>
	        </div>

	        <hr class="featurette-divider">

	        <div class="row featurette">
	          <div class="col-md-10">
	            <h2 class="featurette-heading test">Backend project<span class="text-muted"><br>Poule systeem</span></h2><br>
	            <p class="lead">Maak een systeem waarin een sportcompetitie kan worden bijgehouden. In het systeem moet een admin zijn die poules kan aanmaken en teams voor in de poules. In dit systeem doen minimaal 4 poules mee en elke poule bevat minimaal 4 teams. Binnen een poule speelt elk team tegen elk een ander team waarbij bij een winst 3 punten worden verdiend, gelijkspel 1 punt en bij verlies geen punten worden verdiend.<br><br>

								Wanneer elk team zijn wedstrijden heeft gespeeld binnen de poule wordt er een eindstand gegenereerd. Deze eindstand sorteert de 4 teams binnen de poule op volgorde van punten. Wanneer 2 teams een zelfde puntenaantal hebben wordt er gekeken naar het doelsaldo, wanneer dit het zelfde aantal is wordt er geloot.

								<br><br>In het systeem wat gebouwd moet worden kan een admin alle scores invullen van de wedstrijden en moet het systeem hier na de poulefase zelf de winnaars uit trekken en hiervan de winnaar van poule A tegen poule B en de winnaar van poule C tegen poule D zet. Hier kan de admin vervolgens ook de uitkomsten van opschrijven en wordt hetzelfde systeem gehanteerd als in de poulefase, hierna is de finale en wordt weer hetzelfde systeem toegepast.

								<br><br>In het systeem komen ook gewone gebruikers, deze gebruikers kunnen een uitslag kaart invullen en aan het einde van alle wedstrijden wordt er gekeken hoeveel je goed had en op basis hiervan krijgen zij punten.</p>
							</p>
	          </div>
	        </div>

	        <hr class="featurette-divider">

	        <div class="row featurette">
	          <div class="col-md-7 order-md-2">
	            <h2 class="featurette-heading test">Eisen</h2><br>
							<ul>
								<li class="lead">Dit wordt een webapplicatie</li>
								<li class="lead">Het geheel moet OOP worden geprogrammeerd</li>
								<li class="lead">Er moeten minimaal 4 poules kunnen worden aangemaakt met minimaal 4 teams elke poule.</li>
								<li class="lead">In de url mag geen .php of .html voorkomen</li>
								<li class="lead">Het systeem is "veilig" (Denk dus aan voorkomen van SQL injecties e.d.!</li>
							</ul>
	          </div>
	          <div class="col-md-5">
	            <img class="featurette-image img-fluid mx-auto"  alt="500x500" src="images/checklist.png" data-holder-rendered="true" style="width: 500px; height: 500px;">
	          </div>
	        </div>

	        <hr class="featurette-divider">
					 <footer class="container">
					    <p class="float-right"><a href="#">Back to top</a></p>
					    <p>©2019 Auke Loosman en Matthijs van Benthem</p>
					 </footer>
	      </div>

</div>
</body>
</html>
