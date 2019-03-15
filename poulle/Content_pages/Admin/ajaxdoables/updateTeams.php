<?php
include_once "../../../conf.php";

$obj = new refreshteam();
$data = $obj->refreshTeams();

echo json_encode($data);

 ?>
