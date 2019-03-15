<?php
class refreshteam extends dbconn
{
  public function refreshTeams()
  {
  $Query = "SELECT * FROM teams";
  $result = $this->mysqli->query($Query);
  $array = array();
    if($result->num_rows >= 0){
    while($data = $result->fetch_assoc()){
      $team = new teamsitem();
      $team->team = $data['Team'];
      $team->strength = $data['Strength'];
      $team->agility = $data['Agility'];
      $team->defense = $data['Defense'];
      $array[] = $team;
    }
      return $array;
    }else{
      return "failed";
    }
  }
}

 ?>
