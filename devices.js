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

var text = document.getElementsByClassName("info");
console.log(text.length);
var emptyArray = [];
var checkedValue = null; 
var inputElements = document.getElementsByClassName("brand");
var input = document.getElementsByClassName("type");
var index=0;
var prod = document.getElementById("prod");
var i=0;
var j=0;
/*for(var i=0; inputElements.length; ++i){
      inputElements[i].addEventListener("change",check);
}*/
function check(n) {
	index=0;
	//prod.style.display="none"
	if(inputElements[n].checked){
		//prod.style.display="none"
		checkedValue = inputElements[n].value;
		for(i=0;i<text.length;i++){
		    if(text[i].textContent.includes(checkedValue)) {
		    	prod.style.display = "none";
			    text[i].parentElement.style.display = "block" ;
			    index=1;
			}
			else{
				//prod.style.display="block";
				text[i].parentElement.style.display="none";
			}
		}
		if(index==0) {
			prod.style.display="block";
		}
		
	}
	else{
		checkedValue = null;
		if(!checkedValue) {
			prod.style.display="none";
			for(i=0;i<text.length;i++){
				text[i].parentElement.style.display="block";
			}
		}
	}
}
function chec(n) {
	index=0;
	//prod.style.display="none"
	if(input[n].checked){
		//prod.style.display="none"
		checkedValue = input[n].value;
		for(i=0;i<text.length;i++){
		    if(text[i].textContent.includes(checkedValue)) {
		    	prod.style.display = "none";
			    text[i].parentElement.style.display = "block" ;
			    index=1;
			}
			else{
				text[i].parentElement.style.display="none";
			}
		}
		if(index==0) {
			prod.style.display="block";
		}
	}
	else{
		checkedValue = null;
		if(!checkedValue) {
			prod.style.display="none";
			for(i=0;i<text.length;i++){
				text[i].parentElement.style.display="block";
			}
		}
	}
}
console.log(checkedValue);