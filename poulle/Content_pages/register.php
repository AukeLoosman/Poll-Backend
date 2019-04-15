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
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../Style/StyleInlogRegister.css" />
     <link rel="stylesheet" type="text/css" href="../Style/base.css" />
     <link rel="stylesheet" href="../css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <script src="../js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </head>

  <body>
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
            <a class="nav-link" href="../index.php">Home<span class="sr-only">(current)</span></a>
          </li>
          <?php if ($Role == 0 || $Role == 1) { ?>
          <li class="nav-item active">
            <a class="nav-link" href="../Content_pages/Ranking.php">Ranking<span class="sr-only">(current)</span></a>
          </li>
          <?php } if ($Role == 1) { ?>
          <li>
            <a class="nav-link" href="../Content_pages/Admin/dashboard.php">DashBoard<span class="sr-only">(current)</span></a>
          </li>
          <?php }?>
          <?php if ($Role == -1){?>
          <li>
            <a class="nav-link" class="active" href="../Content_pages/register.php">SignUp<span class="sr-only">(current)</span></a>
          </li>
          <li>
            <a class="nav-link" href="../Content_pages/login.php">SignIn<span class="sr-only">(current)</span></a>
          </li>
        <?php  }else{ ?>
          <a class="nav-link" href="../Content_pages/logout.php">Logout<span class="sr-only">(current)</span></a>
        <?php } ?>
        </ul>
      </div>
    </nav><br>

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
