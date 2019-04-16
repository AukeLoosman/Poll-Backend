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
  //selecteer hoogste gameid uit hostory om een nieuwe poulle te starten met een neiuwe id
  $rowSQL = $this->mysqli->query("SELECT MAX( gameID ) AS max FROM `huidig`");
  $rowSQL1 = $this->mysqli->query("SELECT MAX( gameID ) AS max FROM `history`");
  $row = $rowSQL->fetch_assoc();
  $row1 = $rowSQL1->fetch_assoc();
  if ($row['max'] == 0 ) {
    $game = $row1['max'];
  }else{
    $game = $row['max'];
  }
  $game++;
  while($i < 4){
    $kans = new chance();
    $i++;
    $random_keys=array_rand($a,2);
    $team1 = new teamsitem();
    $team2 = new teamsitem();
    //hier wordt een random team geselecteerd uit een array die gevuld is met alle mogelijk teams
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
    $queryins = "INSERT INTO huidig (gameID ,team1 , str1, agi1,def1,chance1,score1,team2,str2,agi2,def2,chance2,score2,round)
     VALUES ($game ,'".$battle->team1."','".$battle->strength1 ."','".$battle->agility1."','".$battle->defense1 ."','".$battle->chance1."'
       ,0,'".$battle->team2."','".$battle->strength2 ."','".$battle->agility2."','".$battle->defense2 ."','".$battle->chance2."'
         ,0,1)";
    if ($this->mysqli->query($queryins) === TRUE) {
    } else {
      return "failed";
    }
    //hier worden de 2 geselecteerde teams uit de teams array gehaald zodat ze niet 2x kunnen voorkomen
    unset($a[$random_keys[0]]);
    unset($a[$random_keys[1]]);
  }
  return $battlearray;
}
}

 ?>
