const sig = document.getElementById("sign");
const inputs = sig.querySelectorAll("input");

const pat = {
	uname: /^[a-z/d]{5,12}$/,
	mail: /^([a-z\d\.-]+)@([a-z\d-]+)\.([a-z]{2,8})(\.[a-z]{2,8})?$/,
	password: /^[\w@-]{8,20}$/
}

function validate(field,regex){
  if(regex.test(field.value)){
    field.classList.add("valid");
    field.classList.remove("invalid");
  } else {
    field.classList.add("invalid");
    field.classList.remove("valid");
  }
}
inputs.forEach((input)=>{
  input.addEventListener('keyup',(e)=>{
    validate(e.target,pat[e.target.attributes.name.value]);
  })
})