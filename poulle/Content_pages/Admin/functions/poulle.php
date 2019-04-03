<?php
class poulles extends dbconn
{
  public function poul()
  {
    $Query = "SELECT * FROM huidig";
    $result = $this->mysqli->query($Query);
    $array = array();
    $battlearray = array();
    if($result->num_rows >= 0){
      while($row = $result->fetch_assoc()){
          $team1 = $row['team1'];
          $team2 = $row['team2'];
          $gameID = $row['gameID'];
          $score1 = $row['score1'];
          $score2 = $row['score2'];
          if (rand(1,100)<=$row['chance1']){
            $score1++;
          }else{
            $score2++;
          }
        $querygame = "UPDATE huidig SET score1='".$score1."',score2='".$score2."' WHERE team1='".$team1."' AND team2='".$team2."' AND gameID='".$gameID."'";
        $results = $this->mysqli->query($querygame);
      }
      }
    return $score1;
  }
}

 ?>
