<?php
include_once "../../../conf.php";

$obj = new addTeams();
$data = $obj->addTeam($_POST['TeamName'],$_POST['TeamStrength'],$_POST['TeamDefence'],$_POST['TeamAgility']);

echo json_encode($data);
 ?>
