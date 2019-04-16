<?php
class finales extends dbconn
{

  public function up(){
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
    if (sizeof($array) > 0 )
    {
      $id = 0;
      while ($id < sizeof($array)){
       $team1 = new teamsitem();
       $id++;
       $team1 = $array[$id];
       $battle = new battle();
       $battle->team1 = $team1->team;
       $battle->strength1 = $team1->strength;
       $battle->agility1 = $team1->agility;
       $battle->defense1 = $team1->defense;
       $battle->gameID = $team1->gamepie;
       $battlearray[] = $battle;
    }
      return $battlearray;
    }
  }else{
    return "failed";
  }
  }

}


 ?>
