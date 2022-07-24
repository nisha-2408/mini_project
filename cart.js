var items = document.getElementsByClassName("item");
var wrap = document.querySelector(".wrap");
 function delet(n) {
    items[n].remove();
    //console.log(items.length);
    if(items.length === 0) {
        wrap.style.display = "none";
    }
 }

 var dolo = {
    name: "Dolo",
    price: 30,
    total: 30
 };
var cold = {
    name: "Cetrizine",
    price: 10,
    total: 10
};

var carts = [dolo, cold];


var nam = items[0].querySelector(".title");
console.log(nam.textContent == dolo.name);