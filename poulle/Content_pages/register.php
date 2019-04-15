<?php
  include_once '../conf.php';
//tijdelijk
  $Role = -1;

?>
<html>

  <head>
    <meta charset="UTF-8" />
    <title>Poule_register</title>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../Style/StyleInlogRegister.css" />
     <link rel="stylesheet" type="text/css" href="../Style/base.css" />
     <link rel="stylesheet" href="../css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <script src="../js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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
</div><br><br>

<form id="registerform" class="reg_loginform" method="post">
  <div class="logintext">
    <h2>SignUp</h2>
  </div>
  <div class="imgcontainer" name="imgcontainer">
    <img src="../images/pencil.PNG" alt="Avatar" class="avatar">
  </div>
  <div class="container">
     <label for="email"><b>Email</b></label>
    <br>
    <input id="emailstyle" type="text" placeholder="Enter Email" name="email" required>
    <div style="text-align: center;">
    <span id="emailspan">This Email is already registered</span>
  </div>
    <br>
    <label for="uname"><b>Username</b></label>
    <br>
    <input id="usernamestyle" type="text" placeholder="Enter Username" name="uname" required>
    <div style="text-align: center;">
    <span id="userspan">Username is taken</span>
  </div>
    <br>
    <label for="psw"><b>Password</b></label>
    <br>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button class="reg_login" type="submit" name="submit">Register</button>
  </div>
</form>
<script type="text/javascript">
$('#registerform').ready(function() {
  $(document).on("submit","#registerform",function(){
    $.ajax({
      type: 'post',
      url: 'ajaxregister.php',
      data: $('#registerform').serialize(),
      success: function (data) {
        if (data == "registered"){
          window.location.href = "login.php";
        }else{
      if (data == "failed") {
        document.getElementById("usernamestyle").style.borderColor = "red";
        document.getElementById("userspan").style.display = "block";
      }
      if (data = "emailfailed") {
        document.getElementById("emailstyle").style.borderColor = "red";
        document.getElementById("emailspan").style.display = "block";
      }
    }
      }
      });
      return false;
  });
});
</script>
  </body>
</html>
