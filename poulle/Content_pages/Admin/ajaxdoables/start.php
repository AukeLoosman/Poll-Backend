<?php
include_once "../../../conf.php";

$obj = new volgende();
$data = $obj->start();

echo json_encode($data);

 ?>
