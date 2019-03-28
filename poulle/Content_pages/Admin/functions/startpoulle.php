<?php

class poulle extends dbconn{

public function start(){
  $Query = "SELECT * FROM teams";
  $result = $this->mysqli->query($Query);
  $array = array();
  $battlearray = array();
  if($result->num_rows >= 0){
  while($data = $result->fetch_assoc()){
    $team = new teamsitem();
    $teamName = $data['Team'];
    $team->team = $data['Team'];
    $team->strength = $data['Strength'];
    $team->agility = $data['Agility'];
    $team->defense = $data['Defense'];
    $array[$teamName] = $team;
  }
  }
  $i = 0;
  $a = $array;
  while($i < 4){
    if ($a !== 0) {
    $kans = new chance();
    $i++;
    $random_keys=array_rand($a,2);
    $team1 = new teamsitem();
    $team2 = new teamsitem();
    $team1 = $a[$random_keys[0]];
    $team2 = $a[$random_keys[1]];
    $bereken = $kans->kans($team1->strength,$team1->defense,$team1->agility,$team2->strength,$team2->defense,$team2->agility);
    $battle = new battle();
    $battle->team1 = $team1->team;
    $battle->strength1 = $team1->strength;
    $battle->agility1 = $team1->agility;
    $battle->defense1 = $team1->defense;
    $battle->chance1 = $bereken->tc1;
    $battle->team2 = $team2->team;
    $battle->strength2 = $team2->strength;
    $battle->agility2 = $team2->agility;
    $battle->defense2 = $team2->defense;
    $battle->chance2 = $bereken->tc2;
    $battlearray[] = $battle;
    unset($a[$random_keys[0]]);
    unset($a[$random_keys[1]]);
  }
  }
  return $battlearray;
}
}

 ?>
