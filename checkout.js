function on() {
  document.getElementById("overlay").style.display = "block";
}

function off() {
  document.getElementById("overlay").style.display = "none";
}

const inputs = document.getElementById("addr").querySelectorAll("input");

const patterns = {
  telephone: /^\d{10}$/,
  email: /^([a-z\d\.-]+)@([a-z\d-]+)\.([a-z]{2,8})(\.[a-z]{2,8})?$/,
  zip: /^\d{6}$/,
  firstname: /^[a-zA-Z\s]{2,30}$/,
  address: /^[a-zA-Z0-9\s\,\''\-]*$/,
  state: /^[a-zA-Z\s]{5,30}$/,
  city: /^[a-zA-Z\s]{5,30}$/
}

function validate(field,regex){
  if(regex.test(field.value)){
    field.className = "valid";
  } else {
    field.className = "invalid";
  }
}

inputs.forEach((input)=>{
  input.addEventListener('keyup',(e)=>{
    validate(e.target,patterns[e.target.attributes.name.value]);
  })
})

const delv = document.getElementsByClassName("delv");
const bod = delv[0].getElementsByClassName("col-4");

function act(i){
  for(var n=0;n<bod.length;n++)
    if(n==i){
      bod[n].classList.add("bod-act");
      bod[n].classList.remove("bod");
    }
    else {
      bod[n].classList.remove("bod-act");
      bod[n].classList.add("bod");
    }
}
const shad = delv[1].getElementsByClassName("shad");

function ac(i){
  for(var n=0;n<shad.length;n++)
    if(n==i)
      shad[n].classList.add("shad-act");
    else
      shad[n].classList.remove("shad-act");
}