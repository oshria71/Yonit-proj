let burger = document.getElementById('burger'),
	 nav    = document.getElementById('main-nav'),
	 slowmo = document.getElementById('slowmo');

burger.addEventListener('click', function(e){
	this.classList.toggle('is-open');
	nav.classList.toggle('is-open');
});

slowmo.addEventListener('click', function(e){
	this.classList.toggle('is-slowmo');
});

/* Onload demo - dirty timeout */
let clickEvent = new Event('click');

window.addEventListener('load', function(e) {
	slowmo.dispatchEvent(clickEvent);
	burger.dispatchEvent(clickEvent);
	
	setTimeout(function(){
		burger.dispatchEvent(clickEvent);
		
		setTimeout(function(){
			slowmo.dispatchEvent(clickEvent);
		}, 3500);
	}, 5500);
});

function addRow() {
    var div = document.createElement('div');

    div.className = 'mealbox';

    div.innerHTML =
        '<div class="mealbox"><img src="pic/Cookies.jpg" alt="'+document.getElementById("name").value+'">  <div class="text-block">\
            <h4>'+document.getElementById("des").value+'</h4>\
          </div></div>';

    document.getElementById('wrapper').appendChild(div);
}
function func() {
    //do like and unlike
	//to server
}

function removeRow(input) {
    document.getElementById('wrapper').removeChild(input.parentNode);
}


 function signUP(i)  {

	if(i == 1){
		if (document.getElementById("containerID").style.display == "" || document.getElementById("containerID").style.display == "none" ){
			document.getElementById("containerID").style.display = "flexbox";   
			document.getElementById("containerID").style.display = "-webkit-box";
			document.getElementById("containerID").style.display = "-webkit-flex";
			document.getElementById("containerID").style.display = "-ms-flexbox";
		}
		else
		document.getElementById("containerID").style.display = "none";     
	}
else{
	if (document.getElementById("containerIDD").style.display == "" || document.getElementById("containerIDD").style.display == "none" ){
		document.getElementById("containerIDD").style.display = "flexbox";   
		document.getElementById("containerIDD").style.display = "-webkit-box";
		document.getElementById("containerIDD").style.display = "-webkit-flex";
		document.getElementById("containerIDD").style.display = "-ms-flexbox";
	}
	else
	document.getElementById("containerIDD").style.display = "none";
	}
}

function favorite(food){
	$servername = "182.50.133.168";
	$username = "studDB19a";
	$password = "stud19DB1!";
	$dbname = "studDB19a";

	if(document.getElementById("favoriteID").style.backgroundColor == "green")
		document.getElementById("favoriteID").style.backgroundColor = "red";
	else
		document.getElementById("favoriteID").style.backgroundColor = "green";
	
		
}
