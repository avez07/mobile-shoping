
function openNav() {
  
  document.getElementById("mySidenav").style.width = "250px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.8)";

}

/* Set the width of the side navigation to 0 */
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.body.style.backgroundColor = "white";
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
