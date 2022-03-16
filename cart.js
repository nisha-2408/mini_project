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

function total(i) {
    var prices = items[i].getElementsByTagName("input");
    var nam = items[i].querySelector(".title");
    var amt = items[i].querySelector(".tp-price");
    var sub = document.querySelector(".subtotal").querySelector(".sb-value");
    var tot = document.querySelector(".grand-total").querySelector(".sb-value");
    var x,y=0;
    var k;
    for(k=0;k<carts.length;k++) {
        if(nam.textContent == carts[i].name) {
            x = prices[0].value * carts[i].price;
            amt.innerHTML = "₹"+x+".00";
            carts[i].total = x;
        }
    }
    sub.innerHTML = "₹"+(dolo.total+cold.total)+".00";
    tot.innerHTML = "₹"+(dolo.total+cold.total+50)+".00";
}

var nam = items[0].querySelector(".title");
console.log(nam.textContent == dolo.name);