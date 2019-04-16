<?php
include_once "../conf.php";

	$logout = new logoutc();
  $logout->logout();
  header("Location: ../index.php");

 ?>

 <html>
<head>
</head>
<body>
</body>
 </html
