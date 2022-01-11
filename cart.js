function calcid(){
    var dolo = document.getElementById("qty");
    var dolox = dolo.value;
    var h1 = document.getElementById("x");
    var y2 = document.getElementById("a");
    y2.innerHTML= "₹"+(dolo.value*25);
    if(dolox==0)
    {
        var result = confirm("Are you sure you don't want to buy?");
        if(result==true)
        {
            l[1].style.display="none";
        }
        else
        {
            dolo.value=1;
            h1.innerHTML="₹"+(dolo.value*25);
        }
    }
    else
    {
        h1.innerHTML="₹"+(dolox*25);
    }
}
function calcic(){
    var cetrizine = document.getElementById("qty1");
    var z1 = cetrizine.value;
    var h = document.getElementById("x1");
    if(z1==0)
    {
        var result = confirm("Are you sure you don't want to buy?");
        if(result==true)
        {
            l[2].style.display="none";
        }
        else
        {
            cetrizine.value=1;
            h.innerHTML="₹"+(cetrizine.value*15);
        }
    }
    else
    {
        h.innerHTML="₹"+(z1*15);
    }
}
function calciy(){
    var y = document.getElementById("qty3");
    var z = y.value;
    var h2 = document.getElementById("x3");
    if(z==0)
    {
        var result = confirm("Are you sure you don't want to buy?");
        if(result==true)
        {
            l[3].style.display="none";
        }
        else
        {
            y.value=1;
            h2.innerHTML="₹"+(y.value*35);
        }
    }
    else
    {
        h2.innerHTML="₹"+(z*35);
    }
}
var l = document.getElementsByTagName("tr");
console.log(l);
