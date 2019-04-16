<?php
include_once "../../conf.php";

$obj = new battleGetter();
$data = $obj->getBattle($_POST['id']);

echo json_encode($data);
 ?>
