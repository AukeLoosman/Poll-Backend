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
