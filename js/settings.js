var em , us , valpas , valrepas ; //to ensure the fields have valid data to be submitted

  //email validation
  function validateemail() {
    const form = document.getElementById("form");
    const email = document.getElementById("email").value;
    const pattern = /^[^]+@[^]+\.[a-zz]{2,3}$/;

    if (email.match(pattern)) {
      form.classList.add("valid");
      form.classList.remove("invalid");
      em = 1 ;
    } else {
      form.classList.add("invalid");
      form.classList.remove("valid");
      em = 0 ;
    }
    if (email == "") {
      form.classList.remove("invalid");
      form.classList.remove("valid");
      em = 0 ;
    }
  }


  //password validation
  function validatepwd() {
    const form = document.getElementById("form");
    const pwd = document.getElementById("pwd").value;

    if (
      pwd.match(/[a-z]/g) &&
      pwd.match(/[A-Z]/g) &&
      pwd.match(/[0-9]/g) &&
      pwd.match(/[^a-zA-Z\d]/g) &&
      pwd.length >= 12
    ) {
      form.classList.add("valid1");
      form.classList.remove("invalid1");
      pas = 1 ;
    } else {
      form.classList.add("invalid1");
      form.classList.remove("valid1");
      pas = 0 ;
    }
    if (pwd == "") {
      form.classList.remove("invalid1");
      form.classList.remove("valid1");
      pas = 0 ;
    }
  }

  //username validation
  function validateusername() {
    const form = document.getElementById("form");
    const username = document.getElementById("username").value;

    if (
      (username.match(/^[a-z]/) || username.match(/^[A-Z]/)) &&
      username.match(/[A-Za-z0-9]+$/) &&
      username.length > 2 &&
      username.length < 20
    ) {
      form.classList.add("valid3");
      form.classList.remove("invalid3");
      us = 1 ;
    } else {
      form.classList.add("invalid3");
      form.classList.remove("valid3");
      us = 0 ;
    }
    if (username == "") {
      form.classList.remove("invalid3");
      form.classList.remove("valid3");
      us = 0 ;
    }
  }

  //confirm password validation
  function vaildatereenterpwd() {
    const form = document.getElementById("form");
    const pwd1 = document.getElementById("pwd").value;
    const pwd2 = document.getElementById("pwd1").value;

    if (pwd1 == pwd2) {
      form.classList.add("valid2");
      form.classList.remove("invalid2");
      repas = 1 ;
    } else {
      form.classList.add("invalid2");
      form.classList.remove("valid2");
      repas = 0 ;
    }
    if (pwd2 == "") {
      form.classList.remove("invalid2");
      form.classList.remove("valid2");
      repas = 0 ;
    }
  }

  //see if all fields are correctly filled
  function display(){
    document.getElementById("demo").innerHTML = "<h1>" + "Updated Details" + "</h1>";
    const form = document.getElementById("form");
    const pwd1 = document.getElementById("pwd").value;
    const username = document.getElementById("username").value;
    const email = document.getElementById("email").value;

    document.getElementById("demo").innerHTML += "<b>" + "USERNAME : "  + "</b>" +  username + "<br>" ;
    document.getElementById("demo").innerHTML += "<b>" + "EMAIL : " + "</b>" +  email + "<br>" ;
    document.getElementById("demo").innerHTML += "<b>" +  "PASSWORD : " + "</b>"  + pwd1 + "<br>";
  }



//navbar
var dd_main = document.querySelector(".dd_main");

dd_main.addEventListener("click", function(){
  this.classList.toggle("active");
});
