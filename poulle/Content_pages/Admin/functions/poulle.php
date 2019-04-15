<?php
class poulles extends dbconn
{
  public function poul()
  {
    $Query = "SELECT * FROM huidig";
    $result = $this->mysqli->query($Query);
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
          $battles = new battle();
          $battles->team1 = $team1;
          $battles->strength1 = $row['str1'];
          $battles->agility1 = $row['agi1'];
          $battles->defense1 = $row['def1'];
          $battles->chance1 = $row['chance1'];
          $battles->score1 = $score1;
          $battles->team2 = $team2;
          $battles->strength2 = $row['str2'];
          $battles->agility2 = $row['agi2'];
          $battles->defense2 = $row['def2'];
          $battles->chance2 = $row['chance2'];
          $battles->score2 = $score2;
          $battles->gameID = $gameID;
          $battlearray[] = $battles;
        $querygame = "UPDATE huidig SET score1='".$score1."',score2='".$score2."' WHERE team1='".$team1."' AND team2='".$team2."' AND gameID='".$gameID."'";
        $results = $this->mysqli->query($querygame);
      }
      }
    return $battlearray;
  }
}

 ?>
