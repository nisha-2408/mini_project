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
    document.getElementById("log1").style.display = "block";
    document.getElementById("log2").style.display = "none";

}
function sign(){
    document.getElementById("log2").style.display = "block";
    document.getElementById("log1").style.display = "none";
}
