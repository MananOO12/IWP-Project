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

// like button
const likeBtn = document.querySelector(".like__btn");
let likeIcon = document.querySelector("#icon"),
  count = document.querySelector("#count");

let clicked = false;


likeBtn.addEventListener("click", () => {
  if (!clicked) {
    clicked = true;
    likeIcon.innerHTML = `<i class="fas fa-thumbs-up"></i>`;
    count.textContent++;
  } else {
    clicked = false;
    likeIcon.innerHTML = `<i class="far fa-thumbs-up"></i>`;
    count.textContent--;
  }

});

const likeBtn2 = document.querySelector(".like__btn2");
let likeIcon2 = document.querySelector("#icon2"),
  count2 = document.querySelector("#count2");

let clicked2 = false;

likeBtn2.addEventListener("click", () => {
  if (!clicked2) {
    clicked2 = true;
    likeIcon2.innerHTML = `<i class="fas fa-thumbs-up"></i>`;
    count2.textContent++;
  } else {
    clicked2 = false;
    likeIcon2.innerHTML = `<i class="far fa-thumbs-up"></i>`;
    count2.textContent--;
  }
});

//navbar
var dd_main = document.querySelector(".dd_main");

dd_main.addEventListener("click", function(){
  this.classList.toggle("active");
})