var scene = document.getElementById('scene');
var parallax = new Parallax(scene);

var modal = document.getElementsByClassName("modal")[0];
// modal.addEventListener("click", function(e) {
//   modal.classList.remove("active");
// });

var info = document.getElementsByClassName("about")[0];
info.addEventListener("click", function() {
  modal.classList.add("active");
});

var close = document.getElementsByClassName("modal__card__close")[0];
close.addEventListener("click", function() {
  modal.classList.remove("active");
});
