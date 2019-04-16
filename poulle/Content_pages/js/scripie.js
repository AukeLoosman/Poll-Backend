$(document).on("click","#close",function(){
    document.getElementById('myModal1').style.display = 'none';
});


$(document).on("click","#open",function(){
  document.getElementById('myModal1').style.display = 'block';
});

window.onclick = function(event) {
  if (event.target == document.getElementById("myModal1")) {
    document.getElementById('myModal1').style.display = 'none';
  }
}

$(document).on("click","#thisPo",function(){
  var element = $(this).closest('tr').find("#gameID").text();
  $.ajax({
    type: 'post',
    dataType: 'json',
    url: 'aja/dis.php',
    data: {"id": element,},
    success: function(data){

      for (var i = 0; i < data.length; i++) {
      if(i = 1){
        document.getElementById("team1R1").innerHTML =  data[0].team1;
        document.getElementById("score1R1").innerHTML =  data[0].score1 + "-" + data[0].score2;
        document.getElementById("team2R1").innerHTML =  data[0].team2;
      }
      if(i = 2){
        document.getElementById("team3R1").innerHTML =  data[1].team1;
        document.getElementById("score2R1").innerHTML =  data[1].score1 + "-" + data[1].score2;
        document.getElementById("team4R1").innerHTML =  data[1].team2;
      }
      if(i = 3){
        document.getElementById("team5R1").innerHTML =  data[2].team1;
        document.getElementById("score3R1").innerHTML =  data[2].score1 + "-" + data[2].score2;
        document.getElementById("team6R1").innerHTML =  data[2].team2;
      }
      if(i = 4){
        document.getElementById("team7R1").innerHTML =  data[3].team1;
        document.getElementById("score4R1").innerHTML =  data[3].score1 + "-" + data[3].score2;
        document.getElementById("team8R1").innerHTML =  data[3].team2;
      }
      if(i = 5){
        document.getElementById("team1R2").innerHTML =  data[4].team1;
        document.getElementById("score1R2").innerHTML =  data[4].score1 + "-" + data[4].score2;
        document.getElementById("team2R2").innerHTML =  data[4].team2;
      }
      if(i = 6){
        document.getElementById("team3R2").innerHTML =  data[5].team1;
        document.getElementById("score2R2").innerHTML =  data[5].score1 + "-" + data[5].score2;
        document.getElementById("team4R2").innerHTML =  data[5].team2;
      }
      if(i = 7){
        document.getElementById("team1R3").innerHTML =  data[6].team1;
        document.getElementById("score1R3").innerHTML =  data[6].score1 + "-" + data[6].score2;
        document.getElementById("team2R3").innerHTML =  data[6].team2;
      }
      }
    }
  });
  return false;
});

$(document).on("click","#FSearch2",function(){
    $.ajax({
      type: 'get',
      url: 'aja/updatePoulletable.php',
      dataType: 'json',
      success: function(data){
        var int = 0;
        if (data != null) {
          var template = $($("#RankingBattle").html());
          var tr = template.clone();
          $('#battless tr td').remove();
          for (var i = 0; i < data.length; i++) {
            if (int != data[i].gameID) {
              var int = data[i].gameID;
              var template = $($("#RankingBattle").html());
              var tr = template.clone();
              tr.find("#gameID").text(data[i].gameID);
              tr.appendTo("#battless tbody");
        }
        }
        }
      }
    });
    return false;
});
