<?php
include_once "../../../conf.php";

$obj = new poulles();
$data = $obj->poul();

echo json_encode($data);
 ?>
