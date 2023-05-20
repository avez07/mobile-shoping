function toggleNav() {
    var nav = document.getElementById("mySidenav");
    var main = document.getElementById("main");
  
    if (nav.style.width === "0px") {
      nav.style.width = "150px";
      main.style.marginLeft = "150px";
    } else {
      nav.style.width = "0px";
      main.style.marginLeft = "0px";
    }
  }
  