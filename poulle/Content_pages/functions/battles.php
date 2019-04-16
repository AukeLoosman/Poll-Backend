<?php

class battleGetter extends dbconn
{

  function getBattle($id)
  {
    $Query = "SELECT * FROM huidig WHERE gameID = '".$id."' ORDER BY round ASC";
    $Query2 = "SELECT * FROM history WHERE gameID = '".$id."' ORDER BY round ASC";
    $result = $this->mysqli->query($Query);
    $result2 = $this->mysqli->query($Query2);
    $battlearray = array();
    if($result2->num_rows >= 0){
      while($dataa = $result2->fetch_assoc()){
        $battle = new battle();
        $battle->team1 = $dataa['team1'];
        $battle->score1 = $dataa['score1'];
        $battle->team2 = $dataa['team2'];
        $battle->score2 = $dataa['score2'];
        $battle->ronde = $dataa['round'];
        $battle->gameID = $dataa['gameID'];
        $battlearray[] = $battle;
      }
    }
    if($result->num_rows >= 0){
      while($data = $result->fetch_assoc()){
        $battle = new battle();
        $battle->team1 = $data['team1'];
        $battle->score1 = $data['score1'];
        $battle->team2 = $data['team2'];
        $battle->score2 = $data['score2'];
        $battle->ronde = $data['round'];
        $battle->gameID = $data['gameID'];
        $battlearray[] = $battle;
      }
    }else{
      return false;
    }
    return $battlearray;
  }
}


 ?>
