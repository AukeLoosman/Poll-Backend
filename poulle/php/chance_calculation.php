<?php

//ts = teamstrength , td = teamdefence , ta = teamagility ,
//tac = check of ta groter kleiner of even groot is als de ta van het andere team
//tc = teamchance op het verslaan van de andere team
class chance{
  function kans($ts1,$td1,$ta1,$ts2,$td2,$ta2){
    $obj = new kansen();
$tac1 = false;

$tac2 = false;
$even = false;


$dif_s1_d2 = ($ts1 - $td2);
$dif_s2_d1 = ($ts2 - $td1);

if( $ta1 > $ta2 )
{

 $new_ta1 = $ta1 - $ta2;
 $new_ta2 = $ta2 - $new_ta1;
 $tac1 = true;

}
if($ta1 < $ta2)
{
 $new_ta2 = $ta2 - $ta1;
 $new_ta1 = $ta1 - $new_ta2;
 $tac2 = true;
}
 if($ta1 == $ta2)
{
 $even = true;
 $new_ta2 = $ta2;
 $new_ta1 = $ta1;
}

$a1 = $dif_s1_d2 + $new_ta1;
$a2 = $dif_s2_d1 + $new_ta2;


$percentChange = ($a1 / $a2) *100 ;


     if($tac1 == true)
     {
        $obj->tc1 = 50 +  (($percentChange - 100) / 42);
        $obj->tc2 = 100 - $obj->tc1;
     }
     if($tac2 == true)
     {
        $obj->tc2 = 50 +  (($percentChange - 100) / 42);
        $obj->tc1 = 100 - $obj->tc2;
     }
     if($even == true)
     {
        $obj->tc2 = 50;
        $obj->tc1 = 50;
     }
     return $obj;
}
}
?>
