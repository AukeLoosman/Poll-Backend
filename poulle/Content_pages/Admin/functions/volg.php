<?php

class volgende extends dbconn
{
public function start()
{
  $name;
  $str;
  $agi;
  $def;
  $Query = "SELECT * FROM huidig";
  $result = $this->mysqli->query($Query);
  $array = array();
  $battlearray = array();
  if($result->num_rows >= 0){
  while($data = $result->fetch_assoc()){
    //if score van team1 is groter dan die van team2 wordt team1 aan de nieuwe array toegevoegd anders team2
    if ($data['score1'] > $data['score2']) {
      $name = $data['team1'];
      $str = $data['str1'];
      $agi = $data['agi1'];
      $def = $data['def1'];
    }else{
      $name = $data['team2'];
      $str = $data['str2'];
      $agi = $data['agi2'];
      $def = $data['def2'];
    }
    $team = new teamsitem();
    $teamName = $name;
    $team->team = $name;
    $team->strength = $str;
    $team->agility = $agi;
    $team->defense = $def;
    $array[$teamName] = $team;
  }
  }
  return $array;
}

}
 ?>
