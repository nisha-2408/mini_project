var cards = document.querySelectorAll(".cards");
/*for(var i=0;i<cards.length;i++) {
	cards[i].addEventListener("mouseover", add_cart);
}*/
/*function add_cart() {
	var cart = document.querySelector(".add-cart");
	cart.style.display = "block";
}*/
var drop = document.querySelector(".drop-list");
var list = document.querySelector(".drop-down");
list.addEventListener("click", show_drop);
function show_drop() {
	drop.style.display="block";
	drop.classList.add("swing-top");
	list.removeEventListener("click", show_drop);
	list.addEventListener("click", hide_drop);
}
function hide_drop() {
	drop.classList.remove("swing-top");
	drop.style.display="none";
	list.addEventListener("click", show_drop);
	list.removeEventListener("click", hide_drop);
}

var cat = document.getElementById("category");
var brand = document.getElementById("brand");
var blur = document.getElementById("blur");
var price = document.getElementById("price");
function show_cat() {
	cat.style.width = "35%";
	blur.style.filter="blur(2px)";
}
function hide_cat() {
	cat.style.width = "0px";
	blur.style.filter="blur(0)";
}
function show_br() {
	brand.style.width = "35%";
	blur.style.filter="blur(2px)";
}
function hide_br() {
	brand.style.width = "0px";
	blur.style.filter="blur(0)";
}
function show_pr() {
	price.style.width = "35%";
	blur.style.filter="blur(2px)";
}
function hide_pr() {
	price.style.width = "0px";
	blur.style.filter="blur(0)";
}