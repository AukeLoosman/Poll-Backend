<?php
include_once "../../../conf.php";

$obj = new firstsearch();
$data = $obj->first();

echo json_encode($data);

 ?>
