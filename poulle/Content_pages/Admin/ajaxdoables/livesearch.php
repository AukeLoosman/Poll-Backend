<?php
include_once "../../../conf.php";

$obj = new Livesearch();
$data = $obj->live($_POST['test']);

echo json_encode($data);
 ?>
