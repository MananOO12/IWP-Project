function Nextpage() {
    // to page 2 of sign up page
    var x = document.getElementById("tab");
    var y = document.getElementById("tab1");
    x.style.display = "none";
    y.style.display = "block";
}

function Previouspage() {
    // hide first part of sign up page
    var x = document.getElementById("tab");
    var y = document.getElementById("tab1");
    x.style.display = "block";
    y.style.display = "none";
}
//email validation
function validateemail() {
    const form = document.getElementById("form");
    const email = document.getElementById("email").value;
    const pattern = /^[^]+@[^]+\.[a-zz]{2,3}$/;

    if (email.match(pattern)) {
        form.classList.add("valid");
        form.classList.remove("invalid");
    } else {
        form.classList.add("invalid");
        form.classList.remove("valid");
    }
    if (email == "") {
        form.classList.remove("invalid");
        form.classList.remove("valid");
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
    } else {
        form.classList.add("invalid1");
        form.classList.remove("valid1");
    }
    if (pwd == "") {
        form.classList.remove("invalid1");
        form.classList.remove("valid1");
    }
}

//username validation
function validateusername() {
    const form = document.getElementById("form");
    const username = document.getElementById("username").value;

    if (
        (username.match(/^[a-z]/) || username.match(/^[A-Z]/)) &&
        username.match(/[A-Za-z0-9]+$/) &&
        username.length > 5 &&
        username.length < 20
    ) {
        form.classList.add("valid3");
        form.classList.remove("invalid3");
    } else {
        form.classList.add("invalid3");
        form.classList.remove("valid3");
    }
    if (username == "") {
        form.classList.remove("invalid3");
        form.classList.remove("valid3");
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
    } else {
        form.classList.add("invalid2");
        form.classList.remove("valid2");
    }
    if (pwd2 == "") {
        form.classList.remove("invalid2");
        form.classList.remove("valid2");
    }
}
//nationality validation
function vaildateNationality() {
    const form = document.getElementById("form");
    const nationality = document.getElementById("nationality").value;

    var countries = [
        "Afghanistan",
        "Albania",
        "Algeria",
        "Andorra",
        "Angola",
        "Anguilla",
        "Antigua & Barbuda",
        "Argentina",
        "Armenia",
        "Aruba",
        "Australia",
        "Austria",
        "Azerbaijan",
        "Bahamas",
        "Bahrain",
        "Bangladesh",
        "Barbados",
        "Belarus",
        "Belgium",
        "Belize",
        "Benin",
        "Bermuda",
        "Bhutan",
        "Bolivia",
        "Bosnia & Herzegovina",
        "Botswana",
        "Brazil",
        "British Virgin Islands",
        "Brunei",
        "Bulgaria",
        "Burkina Faso",
        "Burundi",
        "Cambodia",
        "Cameroon",
        "Canada",
        "Cape Verde",
        "Cayman Islands",
        "Central Arfrican Republic",
        "Chad",
        "Chile",
        "China",
        "Colombia",
        "Congo",
        "Cook Islands",
        "Costa Rica",
        "Cote D Ivoire",
        "Croatia",
        "Cuba",
        "Curacao",
        "Cyprus",
        "Czech Republic",
        "Denmark",
        "Djibouti",
        "Dominica",
        "Dominican Republic",
        "Ecuador",
        "Egypt",
        "El Salvador",
        "Equatorial Guinea",
        "Eritrea",
        "Estonia",
        "Ethiopia",
        "Falkland Islands",
        "Faroe Islands",
        "Fiji",
        "Finland",
        "France",
        "French Polynesia",
        "French West Indies",
        "Gabon",
        "Gambia",
        "Georgia",
        "Germany",
        "Ghana",
        "Gibraltar",
        "Greece",
        "Greenland",
        "Grenada",
        "Guam",
        "Guatemala",
        "Guernsey",
        "Guinea",
        "Guinea Bissau",
        "Guyana",
        "Haiti",
        "Honduras",
        "Hong Kong",
        "Hungary",
        "Iceland",
        "India",
        "Indonesia",
        "Iran",
        "Iraq",
        "Ireland",
        "Isle of Man",
        "Israel",
        "Italy",
        "Jamaica",
        "Japan",
        "Jersey",
        "Jordan",
        "Kazakhstan",
        "Kenya",
        "Kiribati",
        "Kosovo",
        "Kuwait",
        "Kyrgyzstan",
        "Laos",
        "Latvia",
        "Lebanon",
        "Lesotho",
        "Liberia",
        "Libya",
        "Liechtenstein",
        "Lithuania",
        "Luxembourg",
        "Macau",
        "Macedonia",
        "Madagascar",
        "Malawi",
        "Malaysia",
        "Maldives",
        "Mali",
        "Malta",
        "Marshall Islands",
        "Mauritania",
        "Mauritius",
        "Mexico",
        "Micronesia",
        "Moldova",
        "Monaco",
        "Mongolia",
        "Montenegro",
        "Montserrat",
        "Morocco",
        "Mozambique",
        "Myanmar",
        "Namibia",
        "Nauro",
        "Nepal",
        "Netherlands",
        "Netherlands Antilles",
        "New Caledonia",
        "New Zealand",
        "Nicaragua",
        "Niger",
        "Nigeria",
        "North Korea",
        "Norway",
        "Oman",
        "Pakistan",
        "Palau",
        "Palestine",
        "Panama",
        "Papua New Guinea",
        "Paraguay",
        "Peru",
        "Philippines",
        "Poland",
        "Portugal",
        "Puerto Rico",
        "Qatar",
        "Reunion",
        "Romania",
        "Russia",
        "Rwanda",
        "Saint Pierre & Miquelon",
        "Samoa",
        "San Marino",
        "Sao Tome and Principe",
        "Saudi Arabia",
        "Senegal",
        "Serbia",
        "Seychelles",
        "Sierra Leone",
        "Singapore",
        "Slovakia",
        "Slovenia",
        "Solomon Islands",
        "Somalia",
        "South Africa",
        "South Korea",
        "South Sudan",
        "Spain",
        "Sri Lanka",
        "St Kitts & Nevis",
        "St Lucia",
        "St Vincent",
        "Sudan",
        "Suriname",
        "Swaziland",
        "Sweden",
        "Switzerland",
        "Syria",
        "Taiwan",
        "Tajikistan",
        "Tanzania",
        "Thailand",
        "Timor L'Este",
        "Togo",
        "Tonga",
        "Trinidad & Tobago",
        "Tunisia",
        "Turkey",
        "Turkmenistan",
        "Turks & Caicos",
        "Tuvalu",
        "Uganda",
        "Ukraine",
        "United Arab Emirates",
        "United Kingdom",
        "United States of America",
        "Uruguay",
        "Uzbekistan",
        "Vanuatu",
        "Vatican City",
        "Venezuela",
        "Vietnam",
        "Virgin Islands (US)",
        "Yemen",
        "Zambia",
        "Zimbabwe",
    ];

    var found = 0; //become 1 when a country is found

    for (var i = 0; i < countries.length; ++i) {
        if (nationality == countries[i]) {
            form.classList.add("valid4");
            form.classList.remove("invalid4");
            found = 1; //match has been found
            break;
        }
    }
    if (found == 0) {
        //no match found
        form.classList.add("invalid4");
        form.classList.remove("valid4");
    }
    if (nationality == "") {
        form.classList.remove("invalid4");
        form.classList.remove("valid4");
    }
}
//nationality validation ends

//gender validation begins

function vaildategender() {
    const form = document.getElementById("form");
    const gender = document.getElementById("gender").value;

    var gen = ["Male", "Female", "Other"];

    var found1 = 0; //become 1 when a gender is found

    for (var j = 0; j < gen.length; ++j) {
        if (gender == gen[j]) {
            form.classList.add("valid5");
            form.classList.remove("invalid5");
            found1 = 1; //match has been found
            break;
        }
    }
    if (found1 == 0) {
        //no match found
        form.classList.add("invalid5");
        form.classList.remove("valid5");
    }
    if (gender == "") {
        form.classList.remove("invalid5");
        form.classList.remove("valid5");
    }
}

  //gender validation ends
