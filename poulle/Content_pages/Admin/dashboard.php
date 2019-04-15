<?php
include_once "../../conf.php";

$current = new userst();
$obj = $current->status();
$Role = $obj;
$menu;
?>

<!DOCTYPE html>
<html>
<head>
	<title>Poule-Home</title>
	<link rel="stylesheet" type="text/css" href="../../Style/base.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script type="text/javascript" charset="utf-8" src="js/jquery.js"></script>
	<script type="text/javascript" charset="utf-8" src="js/scripts.js"></script>
</head>

<body>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<!-- Bootstrap NavBar -->
<nav class="navbar navbar-expand-md navbar-dark bg-primary" style="background-image: linear-gradient(to right, #9a35ff, #f461ba, #fc4444 , #ff9616);">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">
    <span class="menu-collapsed">Dashboard</span>
  </a>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
			<li class="nav-item active">
        <a class="nav-link" href="Content_pages/Ranking.php">Ranking <span class="sr-only">(current)</span></a>
      </li>

					 <div class="dropdown">
		   <button class="btn btn-primary-outline dropdown-toggle text-light" id="dropdownMenuButton" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		     Dropdown menu
		   </button>
		   <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
		     <strong>Users</strong>
		     <a class="dropdown-item" href="accounts">Accounts</a>
				 <div class="dropdown-divider"></div>
				 <strong>Poulle</strong>
		     <a class="dropdown-item" href="Poulle">Current Poulle / start</a>
				 <a class="dropdown-item" href="#">History</a>
				 <a class="dropdown-item" href="#">Edit current</a>
				 <a class="dropdown-item" href="current_bets">Current bets</a>
				 <div class="dropdown-divider"></div>
				 <strong>Portfolio</strong>
				 <a class="dropdown-item" href="edit_portfolio">Edit portfolio</a>
				 <div class="dropdown-divider"></div>
				 <strong>Teams</strong>
				 <a class="dropdown-item" href="new_team">Create new team</a>
		   </div>
		 </div>

					 <div class="dropdown" style="float: right;">
			 <button class="btn btn-primary-outline dropdown-toggle text-light" id="dropdownMenuButton" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="float: right;">
				 Dropdown menu
			 </button>
			 <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
				 <strong>Users</strong>
				 <a class="dropdown-item" href="accounts">Accounts</a>
				 <div class="dropdown-divider"></div>
				 <strong>Poulle</strong>
				 <a class="dropdown-item" href="Poulle">Current Poulle / start</a>
				 <a class="dropdown-item" href="#">History</a>
				 <a class="dropdown-item" href="#">Edit current</a>
				 <a class="dropdown-item" href="current_bets">Current bets</a>
				 <div class="dropdown-divider"></div>
				 <strong>Portfolio</strong>
				 <a class="dropdown-item" href="edit_portfolio">Edit portfolio</a>
				 <div class="dropdown-divider"></div>
				 <strong>Teams</strong>
				 <a class="dropdown-item" href="new_team">Create new team</a>
			 </div>
			</div>
    </ul>
  </div>
</nav><!-- NavBar END -->


<!-- Bootstrap row -->
<div class="row" id="body-row">
    <!-- Sidebar -->
    <div id="sidebar-container" class="sidebar-expanded d-none d-md-block"><!-- d-* hiddens the Sidebar in smaller devices. Its itens can be kept on the Navbar 'Menu' -->
        <!-- Bootstrap List Group -->
        <ul class="list-group">
            <!-- Separator with title -->
            <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
                <small>Users</small>
            </li>
            <!-- /END Separator -->
            <!-- Menu with submenu -->
            <a href="accounts" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-dashboard fa-fw mr-3"></span>
                    <span class="menu-collapsed">Accounts</span>
                    <!--<span class="submenu-icon ml-auto"></span>DROPDOWN-->
                </div>
            </a>

            <!-- Separator with title -->
            <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
                <small>Poulle</small>
            </li>
            <!-- /END Separator -->
						<a href="Poulle" class="bg-dark list-group-item list-group-item-action">
								<div class="d-flex w-100 justify-content-start align-items-center">
										<span class="fa fa-calendar fa-fw mr-3"></span>
										<span class="menu-collapsed">Current Poulle / start</span>
								</div>
						</a>
            <a href="#" class="bg-dark list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-calendar fa-fw mr-3"></span>
                    <span class="menu-collapsed">History</span>
                </div>
            </a>
            <a href="#" class="bg-dark list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-envelope-o fa-fw mr-3"></span>
                    <span class="menu-collapsed">Edit current</span>
                </div>
            </a>

          <a href="current_bets" class="bg-dark list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-calendar fa-fw mr-3"></span>
                    <span class="menu-collapsed">Current bets</span>
                </div>
            </a>
            <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
                <small>Portfolio</small>
            </li>

            <!-- /END Separator -->
            <a href="edit_portfolio" class="bg-dark list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-question fa-fw mr-3"></span>
                    <span class="menu-collapsed">Edit portfolio</span>
                </div>
            </a>
						<li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
								<small>Teams</small>
						</li>
						<a href="new_team" class="bg-dark list-group-item list-group-item-action">
								<div class="d-flex w-100 justify-content-start align-items-center">
										<span class="fa fa-question fa-fw mr-3"></span>
										<span class="menu-collapsed">Create new team</span>
								</div>
						</a>
        </ul><!-- List Group END-->
    </div><!-- sidebar-container END -->

    <!-- Text in midden-->
    <div class="col" id="content_item">
      <div id="accounts">
        <h1>
            Main Menu
        </h1>
        <div class="card">
            <h4 class="card-header">Dashboard</h4>
            <div class="card-body">

            </div>
        </div>
      </div>
    </div><!-- Main Col END -->
</div><!-- body-row END d -->
<script type="text/template" id="livesearch">
<tr>
	<td id="uid">&nbsp;</td>
	<td id="uname">&nbsp;</td>
	<td id="password">&nbsp;</td>
	<td id="email">&nbsp;</td>
	<td id="portfolio">&nbsp;</td>
</tr>
</script>
<script type="text/template" id="row-template">
<tr>
  <td id="id">&nbsp;</td>
  <td id="user">&nbsp;</td>
  <td id="portfolio" contenteditable="true">&nbsp;</td>
  <td><button id="updatedata">update</button></td>
</tr>
</script>
<script type="text/template" id="Team-Temp">
<tr>
  <td id="teams">&nbsp;</td>
  <td id="strengths">&nbsp;</td>
  <td id="defences">&nbsp;</td>
	<td id="agilitys">&nbsp;</td>
</tr>
</script>

</body>
</html>
