<?php
include_once "../../conf.php";

$obj = new poulletable();
$data = $obj->fillit();

echo json_encode($data);

 ?>
