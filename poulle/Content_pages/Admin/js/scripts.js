$(document).ready(function(){
  $('a').click(function(){
    $('#content_item').load("content.php #" + $(this).attr('href'));
    return false;
  });

  $(document).on("click","#updatedata",function () {

    $.ajax({
      type: 'post',
      url: 'ajaxdoables/ajaxportfolio.php',
      data: {
        port: $(this).closest('tr').find("#portfolio").text(),
        user: $(this).closest('tr').find("#user").text()},
      success: function(data){
        alert(data);
      }
    });
    return false;
    });
});



// initieren van de timer var
var timer11=0;
var myvar;
// function myTimer() => null
// Elke 6 seconden in de volgende fase
function myTimer() {


  // per "tick" +1 op de timer
  timer11++;

  // testen van timer variable
  console.log(timer11);


  // bij elke tick voer deze request uit
  $.ajax({
    type: 'get',
    url: 'ajaxdoables/ajaxpoulle.php',
    dataType: 'json',
    succes: function(data){
      if (data != null){
      document.getElementById("tijdelijk").innerHTML = data[0];
      }
    }
  });

  // dit is ronde 2, wedstrijden eindigen per 3 dus altijd een winnaar
  if (timer11 == 3) {
    $.ajax({
      type:'get',
      url: 'ajaxdoables/start.php',
      dataType: 'json',
      succes: function(data){
        if (data != null){
        }
      }
    });
  }

  // dit is ronde 3, de winnaars van ronde 2 same as 2
  if (timer11 == 6) {
    $.ajax({
      type:'get',
      url: 'ajaxdoables/start2.php',
      dataType: 'json',
      succes: function(data){
        if (data != null){
        }
      }
    });
  }
  // dit is ronde 4, dit is de uitkomst van de finale
  if (timer11 == 9) {


    // resetten van de timer variabele
    timer11 = 0;

    // Interval stop zetten
    clearInterval(myvar);
  }
}



$(document).on("click","#startpoulle",function(){
  var myvar = setInterval(myTimer, 1000);
});





    $(document).on("click","#newPoulle",function(){
      $.ajax({
        type: 'get',
        url: 'ajaxdoables/ajaxstartpoulle.php',
        dataType: 'json',
        succes: function(data){
          if (data != null){
          document.getElementById("tijdelijk").innerHTML = data[0];
        }
        }
      });
      return false;
    });

$(document).on("keyup","#livesearchuser",function(){
  let element = $("#livesearchuser");
  elementValue = element[0].value;
  $.ajax({
    type: 'post',
    url: 'ajaxdoables/livesearch.php',
    data: {"test": elementValue},
    dataType: 'json',
    success: function(data){
      console.log(data);
      if (data != null) {
        var template = $($("#livesearch").html());
        var tr = template.clone();
        $('#Live-Table tr td').remove();
        for (var i = 0; i < data.length; i++) {
        var template = $($("#livesearch").html());
        var tr = template.clone();
        tr.find("#uid").text(data[i].uid);
        tr.find("#uname").text(data[i].username);
        tr.find("#password").text(data[i].password);
        tr.find("#email").text(data[i].email);
        tr.find("#portfolio").text(data[i].portfolio);
        tr.appendTo("#Live-Table tbody");
      }
      }
    }
  });
  return false;
});

$(document).on("click","#FSearch",function(){
    $.ajax({
      type: 'get',
      url: 'ajaxdoables/firstsearch.php',
      dataType: 'json',
      success: function(data){
        if (data != null) {
          var template = $($("#livesearch").html());
          var tr = template.clone();
          $('#Live-Table tr td').remove();
          for (var i = 0; i < data.length; i++) {
          var template = $($("#livesearch").html());
          var tr = template.clone();
          tr.find("#uid").text(data[i].uid);
          tr.find("#uname").text(data[i].username);
          tr.find("#password").text(data[i].password);
          tr.find("#email").text(data[i].email);
          tr.find("#portfolio").text(data[i].portfolio);
          tr.appendTo("#Live-Table tbody");
        }
        }
      }
    });
    return false;
});

$('#search_form').ready(function() {
  $(document).on("submit","#search_form",function(){
    $.ajax({
      type: 'post',
      url: 'ajaxdoables/ajaxselect.php',
      data: $('#search_form').serialize(),
      dataType: 'json',
      success: function (data) {
      if (data != null) {
        var template = $($("#row-template").html());
        var tr = template.clone();
        tr.find("#id").text(data.uid);
        tr.find("#user").text(data.username);
        tr.find("#portfolio").text(data.portfolio);
        $('table tr:last td').remove();
        tr.appendTo("#Table tbody");
      }
      }
      });
      return false;
  });
});

$('#Tform').ready(function(){
  $(document).on("submit","#Tform",function(){
    $.ajax({
      type: 'post',
      url: 'ajaxdoables/ajaxteam.php',
      data: $('#Tform').serialize(),
      dataType: 'json',
      success: function(data){
        alert(data);
      }
    });
    document.getElementById('myModal').style.display = 'none';
    return false;
  });
});

$(document).on("click","#THeader",function(){
  $.ajax({
    type: 'get',
    url: 'ajaxdoables/updateTeams.php',
    dataType: 'json',
    success: function(data){
      var template = $($("#Team-Temp").html());
      var tr = template.clone();
      $('table tr td').remove();
      for (var i = 0; i < data.length; i++) {
      var template = $($("#Team-Temp").html());
      var tr = template.clone();
      tr.find("#teams").text(data[i].team);
      tr.find("#strengths").text(data[i].strength);
      tr.find("#defences").text(data[i].defense);
      tr.find("#agilitys").text(data[i].agility);
      tr.appendTo("#Team_Table tbody ");
    }
    }
  });
  return false;
});

$(document).on("click","#close",function(){
    document.getElementById('myModal').style.display = 'none';
});


$(document).on("click","#Add_Team",function(){
  document.getElementById('myModal').style.display = 'block';
});

window.onclick = function(event) {
  if (event.target == document.getElementById("myModal")) {
    document.getElementById('myModal').style.display = 'none';
  }
}
