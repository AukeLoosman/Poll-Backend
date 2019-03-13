<?php
include_once "../../../conf.php";


$obj = new Admin();
$data = $obj->search($_POST['searchUser']);

echo json_encode($data);
 ?>
