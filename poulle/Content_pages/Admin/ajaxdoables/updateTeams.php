<?php
include_once "../../../conf.php";

$obj = new Admin();
$data = $obj->refreshTeams();

echo json_encode($data);

 ?>
