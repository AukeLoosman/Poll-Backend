<?php
include_once "../../../conf.php";


$obj = new finales();
$data = $obj->up();

echo json_encode($data);
 ?>
