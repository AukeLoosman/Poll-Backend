<?php

//ts = teamstrength , td = teamdefence , ta = teamagility ,
//tac = check of ta groter kleiner of even groot is als de ta van het andere team
//tc = teamchance op het verslaan van de andere team

$ts1 = 50;
$td1 = 12;
$ta1 = 27;
$tac1 = false;
$tc1;

$ts2 = 48;
$td2 = 27;
$ta2 = 12;
$tac2 = false;
$even = false;
$tc2;

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
        $tc1 = 50 +  (($percentChange - 100) / 42);
        $tc2 = 100 - $tc1;
     }
     if($tac2 == true)
     {
        $tc2 = 50 +  (($percentChange - 100) / 42);
        $tc1 = 100 - $tc2;
     }
     if($even == true)
     {
        $tc2 = 50;
        $tc1 = 50;
     }
echo $tc1;
echo "   ";
echo $tc2;
echo "   ";
}
