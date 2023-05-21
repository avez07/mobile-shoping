
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
