function openSide() {
    document.getElementById("hello").style.display = "block";
    document.getElementById("klo").style.display = "none";
  }
  
  function myClose() {
    document.getElementById("klo").style.display = "block";
    document.getElementById("hello").style.display = "none";
  }

function login(){
    var element = document.getElementById("log1");
    element.classList.remove("w3-animate-right");
    document.getElementById("log1").style.display = "flex";
    document.getElementById("log2").style.display = "none";

}
function sign(){
    document.getElementById("log2").style.display = "flex";
    document.getElementById("log1").style.display = "none";
}
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}

const card = document.getElementById("cardo");
const inpu = card.querySelectorAll("input");

const reg = {
  cardno: /^\d{12}$/,
  name: /^[a-zA-Z\s]{2,30}$/,
  cvv: /^\d{3}$/
}
function validate(field,regex){
  if(regex.test(field.value)){
    field.className = "valid";
  } else {
    field.className = "invalid";
  }
}

inpu.forEach((input)=>{
  input.addEventListener('keyup',(e)=>{
    validate(e.target,reg[e.target.attributes.name.value]);
  })
})