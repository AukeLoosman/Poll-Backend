<?php
include_once "../../../conf.php";

$obj = new poulle();
$data = $obj->start();

echo json_encode($data);

 ?>
