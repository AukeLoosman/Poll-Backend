<?php

class volgende extends dbconn
{

public function start()
{
  $name;
  $str;
  $agi;
  $def;
  //verplaats poulle van huidig naar history
  $Update = "INSERT INTO history SELECT * FROM huidig ORDER BY gameID ASC";
  //verwijder uit huidig
  $Del = "DELETE FROM huidig";
  $Query = "SELECT * FROM huidig ORDER BY gameID ASC";
  $result = $this->mysqli->query($Query);
  $array = array();
  $battlearray = array();
  if($result->num_rows >= 0){
    $i = 0;
  while($data = $result->fetch_assoc()){
    //if score van team1 is groter dan die van team2 wordt team1 aan de nieuwe array toegevoegd anders team2
    $i++;
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
    $team->gamepie = $data["gameID"];
    $array[$i] = $team;
  }
  if ($this->mysqli->query($Update) === TRUE) {
  } else {
    return "failed at update";
  }
  if ($this->mysqli->query($Del) === TRUE) {
  } else {
    return "failed at delete";
  }
  }
  if (sizeof($array) > 3 ) {
    $id = 0;
    while ($id < sizeof($array)){
    $kans = new chance();
    // selecteren en orderen van de 4 teams die gewonnen hadden
    $team1 = new teamsitem();
    $team2 = new teamsitem();
    $id++;
    $team1 = $array[$id];
    $id++;
    $team2 = $array[$id];
    //kans berekening
    $bereken = $kans->kans($team1->strength,$team1->defense,$team1->agility,$team2->strength,$team2->defense,$team2->agility);
    //team 1 tegen 2
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
    $battle->gameID = $team1->gamepie;

    $battlearray[] = $battle;
    //insert in database
    $queryins = "INSERT INTO huidig (gameID ,team1 , str1, agi1,def1,chance1,score1,team2,str2,agi2,def2,chance2,score2,round)
     VALUES ($battle->gameID ,'".$battle->team1."','".$battle->strength1 ."','".$battle->agility1."','".$battle->defense1 ."','".$battle->chance1."'
       ,0,'".$battle->team2."','".$battle->strength2 ."','".$battle->agility2."','".$battle->defense2 ."','".$battle->chance2."'
         ,0,2)";
    if ($this->mysqli->query($queryins) === TRUE) {
    } else {
      return "failed at insert battle";
    }
  }
  }else
  {
    return "failed";
  }
  return $battlearray;
}

}
 ?>
