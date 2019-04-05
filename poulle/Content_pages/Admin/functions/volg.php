<?php

class volgende extends dbconn
{

public function start()
{
  $name;
  $str;
  $agi;
  $def;
  //selecteer hoogste gameid from history
  $rowSQL = $this->mysqli->query("SELECT MAX( gameID ) AS max FROM `history`");
  $row = $rowSQL->fetch_assoc();
  $game = $row['max'];
  $game++;
  //verplaats poulle van huidig naar history
  $Update = "INSERT INTO history SELECT * FROM huidig WHERE gameID = '".$game."'";
  //verwijder uit huidig
  $Del = "DELETE FROM huidig WHERE gameID = '".$game."'";
  $Query = "SELECT * FROM huidig WHERE gameID = '".$game."'";
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
    $kans = new chance();
    // selecteren en orderen van de 4 teams die gewonnen hadden
    $team1 = new teamsitem();
    $team2 = new teamsitem();
    $team3 = new teamsitem();
    $team4 = new teamsitem();
    $team1 = $array['1'];
    $team2 = $array['2'];
    $team3 = $array['3'];
    $team4 = $array['4'];
    //kans berekening
    $bereken = $kans->kans($team1->strength,$team1->defense,$team1->agility,$team2->strength,$team2->defense,$team2->agility);
    $bereken2 = $kans->kans($team3->strength,$team3->defense,$team3->agility,$team4->strength,$team4->defense,$team4->agility);
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

    $battlearray[] = $battle;
    //insert in database
    $queryins = "INSERT INTO huidig (gameID ,team1 , str1, agi1,def1,chance1,score1,team2,str2,agi2,def2,chance2,score2)
     VALUES ($game ,'".$battle->team1."','".$battle->strength1 ."','".$battle->agility1."','".$battle->defense1 ."','".$battle->chance1."'
       ,0,'".$battle->team2."','".$battle->strength2 ."','".$battle->agility2."','".$battle->defense2 ."','".$battle->chance2."'
         ,0)";
    if ($this->mysqli->query($queryins) === TRUE) {
    } else {
      return "failed at insert battle 1";
    }
    //team 3 tegen 4
    $battles = new battle();
    $battles->team1 = $team3->team;
    $battles->strength1 = $team3->strength;
    $battles->agility1 = $team3->agility;
    $battles->defense1 = $team3->defense;
    $battles->chance1 = $bereken2->tc1;
    $battles->team2 = $team4->team;
    $battles->strength2 = $team4->strength;
    $battles->agility2 = $team4->agility;
    $battles->defense2 = $team4->defense;
    $battles->chance2 = $bereken2->tc2;
    $battlearray[] = $battles;
    //insert in database
    $queryins2 = "INSERT INTO huidig (gameID ,team1 , str1, agi1,def1,chance1,score1,team2,str2,agi2,def2,chance2,score2)
     VALUES ($game ,'".$battles->team1."','".$battles->strength1 ."','".$battles->agility1."','".$battles->defense1 ."','".$battles->chance1."'
       ,0,'".$battles->team2."','".$battles->strength2 ."','".$battles->agility2."','".$battles->defense2 ."','".$battles->chance2."'
         ,0)";
    if ($this->mysqli->query($queryins2) === TRUE) {
    } else {
      return "failed at insert battle2";
    }
  }
  else
  {
    return "failed";
  }
  return $battlearray;
}

}
 ?>
