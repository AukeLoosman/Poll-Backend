<?php
class addTeams extends dbconn
{
  public function addTeam($team,$strength,$defence,$agility)
  {
    $this->mysqli->real_escape_string($team);
    $query = "INSERT INTO teams (Team ,Agility , Defense, Strength) VALUES ('".$team."' ,'".$agility."','".$defence."','".$strength."')";
    if ($this->mysqli->query($query) === TRUE) {
      echo "success";
    }else{
      echo "failed";
    }
  }
}
 ?>
