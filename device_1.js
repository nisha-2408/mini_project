let progressBar = document.querySelector(".circular-progress");
let valueContainer = document.querySelector(".value-container");
//console.log(progressBar);

let progressValue = 0;
let progressEndValue = 86;
let speed = 25;
let progress = setInterval( () => {
    progressValue++;
    valueContainer.textContent = `${progressValue}%`;
    progressBar.style.background = `conic-gradient(#4d5bf9 ${progressValue * 3.6}deg, #cadcff ${progressValue * 3.6}deg)`;
    //console.log(progressValue);
    if(progressValue == progressEndValue) {
        clearInterval(progress);
    }
}, speed);
function show_content(n) {
	var i;
	var details = document.getElementsByClassName("detail-info");
	var name = document.getElementsByClassName("detail");
	for(i=0;i<details.length;i++) {
		details[i].classList.add("style");
		name[i].classList.remove("detail-active");
	}
	details[n].classList.remove("style");
	name[n].classList.add("detail-active");
}
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
	showSlides(slideIndex += n);
}

function currentSlide(n) {
	showSlides(slideIndex = n);
}

function showSlides(n) {
	var i;
	var slides = document.getElementsByClassName("fad");
	var dots = document.getElementsByClassName("dot");
	console.log(dots.length);
	if(n > slides.length) {
		slideIndex = 1;
	}
	if(n < 1) {
		slideIndex = slides.length;
	}
	for(i = 0;i< slides.length;i++) {
		slides[i].style.display = "none";
	}
	for(i=0;i<dots.length;i++) {
		dots[i].classList.remove("act");
	}
	slides[slideIndex-1].style.display = "block";
	dots[slideIndex-1].classList.add("act");
}
 var faq = document.getElementsByClassName("q");

 function collapse(n) {
 	var contents = faq[n].nextElementSibling;
 	var icon = faq[n].getElementsByTagName("i");
 	//console.log(contents);
 	if(contents.style.maxHeight) {
 		contents.style.maxHeight = null;
 		icon[0].style.transform = "rotate(0deg)";
 	} else {
 		contents.style.maxHeight = contents.scrollHeight + "px";
 		icon[0].style.transform = "rotate(180deg)";
 	}
 }