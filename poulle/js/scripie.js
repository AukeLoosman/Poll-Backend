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
