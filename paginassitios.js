var header = document.getElementById("myTopnav");
var items = header.getElementsByClassName("item");
for (var i = 0; i < items.length; i++) {
  items[i].addEventListener("click", function () {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}