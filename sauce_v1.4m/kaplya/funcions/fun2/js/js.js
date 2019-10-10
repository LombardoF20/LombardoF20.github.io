var root = document.getElementById("portrait");

var mouse_monitor = function(e) {
   let x = e.clientX / innerWidth;
   let y = e.clientY / innerHeight;

   let move_x = x > 0.5 ? "-30px" : "30px";
   let move_y = y > 0.5 ? "-20px" : "20px";

   root.style.setProperty("transform", move_x);
   root.style.setProperty("transform", move_y);
};

root.addEventListener("mousemove", mouse_monitor);
