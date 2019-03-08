<?php
  include_once '../conf.php';
//tijdelijk
  $Role = -1;

  //als er op registreeren wordt geclicked doet ie deze shit en verstuurd hij de inlog gegevens naar de registreer functie
  if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $user = new User();

    if ($user->register($email, $username, $password)) {
      echo "succes";
    }
  }
?>
<html>

  <head>
    <meta charset="UTF-8" />
    <title>Poule_register</title>
    <link rel="stylesheet" type="text/css" href="../Style/StyleInlogRegister.css" />
     <link rel="stylesheet" type="text/css" href="../Style/base.css" />
  </head>

  <body>
<div class="topnav">
  <a href="../index.php">Home</a>
  <!-- Controle op user Role -->
    <?php if ($Role == 0 || $Role == 1) { ?>
  <a href="Ranking.php" >Ranking</a>
    <?php } if ($Role == 1) { ?>
  <a href="Admin/dashboard.php" >DashBoard</a>
  <?php }?>
  <div class="topnav-right">
    <a class="active" href="register.php">SignUp</a>
    <a href="login.php">SignIn</a>
  </div>
</div>

    <form id="inlogcontainer" method="post" >
      <div id="container_items">
        <label for="email"><b>Email</b></label>
        <br/>
        <input type="text" placeholder="Email" name="email" required>
        <br/><br/>
        <label for="username"><b>Gebruikernaam</b></label>
        <br/>
        <input type="text" placeholder="Username" name="username" required />
        <br/><br/>
        <label for="password"><b>Wachtwoord</b></label>
        <br/>
        <input  type="password"
          placeholder="Enter Password"
          name="password"
          required
        />
        <br/><br/>
        <button id="register" type="submit" name="submit">Register</button>
        <br/><br/>
      </div>
    </form>
  </body>
</html>