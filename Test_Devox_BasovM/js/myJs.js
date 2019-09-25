function myFunction() {
  var x = document.getElementById("myNavbar");
  if (x.className === "block-main__item") {
    x.className += " responsive";
  } else {
    x.className = "block-main__item";
  }
}
