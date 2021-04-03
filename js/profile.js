// Ateeth's js
function EnterComment() {
  var x = document.getElementById("txt");
  x.style.display = "block";
  document.getElementById("bt1").style.display = "block";
}

function PostComment() {
  var a = "";
  a = document.getElementById("txt").value;
  document.getElementById("comments").innerHTML += "<pre>" + a + "<pre>";
  document.getElementById("txt").value = "";
  document.getElementById("txt").style.display = "none";
  document.getElementById("bt1").style.display = "none";
}

function EnterComment1() {
  var x = document.getElementById("txt1");
  x.style.display = "block";
  document.getElementById("bt2").style.display = "block";
}

function PostComment1() {
  var a = "";
  a = document.getElementById("txt1").value;
  document.getElementById("comments1").innerHTML += "<pre>" + a + "<pre>";
  document.getElementById("txt1").value = "";
  document.getElementById("txt1").style.display = "none";
  document.getElementById("bt2").style.display = "none";
}
