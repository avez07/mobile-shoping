
function openNav() {

  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("prev").style.display = "none";


}

/* Set the width of the side navigation to 0 */
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("prev").style.display = "inline-block";

}
function toggleNav2() {
  var nav = document.getElementById("drop");


  if (nav.style.height === "115px") {
    nav.style.height = "0px";
    nav.style.paddingY = "0px";


  } else {
    nav.style.height = "115px";
    nav.style.paddingY = "20px";


  }
}
function password() {                                //ipassword show hide function for login page 
  var x = document.getElementsByClassName("log");
  if (x[1].type === "password") {
    x[1].type = "text";
    document.getElementById("eye-1").style.display = "none";
    document.getElementById("eye-2").style.display = "inline";

  }
  else {
    x[1].type = "password";
    document.getElementById("eye-1").style.display = "inline";
    document.getElementById("eye-2").style.display = "none";
  }
}
function password2() {                                                 //ipassword show hide function for login page 
  var y = document.getElementsByClassName("sign");
  if (y[3].type === "password" || y[4].type === "password") {
    y[3].type = "text";
    y[4].type = "text";


    document.getElementById("eye-4").style.display = "none";
    document.getElementById("eye-3").style.display = "inline-block";
  }
  else {
    y[3].type = "password";
    y[4].type = "password";

    document.getElementById("eye-4").style.display = "inline-block";
    document.getElementById("eye-3").style.display = "none";


  }
}
function validate() {                                          //validation for signup form
  var name = document.getElementById("name").value;
  var phone = document.getElementById("phone").value;
  var email = document.getElementById("email").value;
  var user = document.getElementById("username").value;
  var addr = document.getElementById("address").value;
  var land = document.getElementById("landmark").value;
  var city = document.getElementById("city").value;
  var state = document.getElementById("state").value;
  var zip = document.getElementById("zip").value;
  var pass1 = document.getElementById("password1").value;



  if (name == null || name == "") {
    document.getElementById("names").innerHTML = "Please fill the text";
    return false;
  }
  else if (!isNaN(name)) {
    document.getElementById("names").innerHTML = "Only characters is allowed";
    return false;
  }
  else if (phone == null || phone == "") {
    document.getElementById("phone-d").innerHTML = "Please fill the text";
    return false;
  }
  else if (email == null || email == "") {
    document.getElementById("email-id").innerHTML = "Please fill the text";
    return false;
  }
  else if (addr == null || addr == "") {
    document.getElementById("add-d").innerHTML = "Please fill the text";
    return false;
  }
  else if (land == null || land == "") {
    document.getElementById("lank").innerHTML = "Please fill the text";
    return false;
  }
  else if (city == null || city == "") {
    document.getElementById("city-d").innerHTML = "Please fill the text";
    return false;
  }
  else if (state == null || state == "") {
    document.getElementById("state-d").innerHTML = "Please fill the text";
    return false;
  } else if (zip == null || zip == "") {
    document.getElementById("zip-d").innerHTML = "Please fill the text";
    return false;
  }
  else if (/[^a-z0-9@.]/.test(email)) {
    document.getElementById("email-id").innerHTML = "Email contain only Alphanumeric character";

    return false;
  }

  else if (email.indexOf('@') <= 0 || email.indexOf('.') <= 0) {
    document.getElementById('email-id').innerHTML = "@  '.' Position are Invalid ";
    return false
  }

  else if (email.charAt(email.length - 1) == "@" || email.charAt(email.length - 1) == ".") {
    document.getElementById('email-id').innerHTML = "You canot type a @ or '.' in the end of email";
    return false
  }

  else if (email.charAt(email.length - 4) != "." && email.charAt(email.length - 3) != ".") {
    document.getElementById('email-id').innerHTML = "'.' Position are invalid";
    return false
  }
  else if (user == null || user == "") {
    document.getElementById("user").innerHTML = "Please fill the text";
    return false
  }
  else if (pass1 == null || pass1 == "") {
    document.getElementById("pass1").innerHTML = "Please fill the text";
    return false
  }
  else if (pass1[0] !== pass1[0].toUpperCase()) {
    document.getElementById('pass1').innerHTML = "Frist letter should be uppercase "
    return false
  }
  else if (!/[a-z]/.test(pass1)) {
    document.getElementById('pass1').innerHTML = "Atleast one lowercase character"

    return false
  }
  else if (!/[0-9]/.test(pass1)) {
    document.getElementById('pass1').innerHTML = "Atleast one number"

    return false
  }
  else if (!/[ \W+]/.test(pass1)) {
    document.getElementById('pass1').innerHTML = "Atleast one special characters"

    return false
  }

}
