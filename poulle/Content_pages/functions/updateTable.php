<?php
class poulletable extends dbconn
{
  public function fillit()
  {
    $Query = "SELECT * FROM huidig";
    $result = $this->mysqli->query($Query);
    $array = array();

    if($result->num_rows >= 0){
      while($data = $result->fetch_assoc()){
        $game = new gamepie();
        $game->gameID = $data['gameID'];
        $array[] = $game;
      }
      return  $array;
    }else{
      return false;
    }
  }
}


 ?>
