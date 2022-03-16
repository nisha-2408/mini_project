var text = document.getElementsByClassName("info");
console.log(text.length);
var emptyArray = [];
var checkedValue = []; 
var inputElements = document.getElementsByClassName("brand");
var input = document.getElementsByClassName("type");
var index=0;
var ind;
var prod = document.getElementById("prod");
var i=0;
var j=0;
for(i=0;i<text.length;i++){
	emptyArray[i]=text[i].textContent;
}
console.log(emptyArray);
/*for(var i=0; inputElements.length; ++i){
      inputElements[i].addEventListener("change",check);
}*/
function check(n) {
	index=0;
	//prod.style.display="none"
	/*if(inputElements[n].checked){
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
	}*/
	if(inputElements[n].checked){
		//prod.style.display="none"
		checkedValue[j] = inputElements[n].value;
		console.log(checkedValue);
		j++;
		if(checkedValue.length == 1) {
		 for(i=0;i<text.length;i++){
		    if(text[i].textContent.includes(checkedValue[0])) {
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
		else {
			for(var k=1;k<checkedValue.length;k++) {
				for(i=0;i<text.length;i++) {
					if(emptyArray[i].includes(checkedValue[k])) {
		    	              prod.style.display = "none";
			            text[i].parentElement.style.display = "block" ;
			            index=1;
			        }
			        else{
				   //prod.style.display="block";
				        text[i].parentElement.style.display="none";
			        }
				}
			}
			if(index == 0) {
			prod.style.display="block";
		  }
		}}
		else {
			ind = checkedValue.indexOf(inputElements[n].value);
			if(checkedValue.length == 1){
				for(i=0;i<text.length;i++) {
					prod.style.display="none";
					text[i].parentElement.style.display="block";
				}
				checkedValue.length=[];
				console.log(!checkedValue.length);
			}
			if(!checkedValue.length) {
				for(i=0;i<text.length;i++) {
					prod.style.display="none";
					text[i].parentElement.style.display="block";
				}
			}
			else{
				for(i=0;i<text.length;i++) {
					if(text[i].textContent.includes(checkedValue[ind])) {
						text[i].parentElement.style.display="none";
					}
				}
				//checkedValue[ind]="";
				for(var k=ind+1;k<checkedValue.length;k++) {
					checkedValue[k-1]=checkedValue[k];
				}
				checkedValue.length-=1;
				console.log(checkedValue);
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