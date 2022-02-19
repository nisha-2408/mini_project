var item = document.getElementsByClassName("item");
for(var i=0;i<item.length;i++) {
    item[i].className = "item - "+(i+1);
    item[i].children[3].children[0].className = "amount - "+(i+1);
    item[i].children[2].children[0].className = "input - "+(i+1);
    item[i].children[2].children[0].addEventListener("change",amount);
}

function amount() {
    for(var i=0;i<item.length;i++) {
        
    }
}


