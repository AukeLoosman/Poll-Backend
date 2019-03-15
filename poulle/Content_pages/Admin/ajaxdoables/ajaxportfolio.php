<?php
include_once "../../../conf.php";

$value = $_POST['port'];

$obj = new updatePortofolio();
$data = $obj->updatePorto($_POST['user'],$_POST['port']);


echo $data;
 ?>
