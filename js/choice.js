function check() {
	if (document.getElementById('nru').checked == true) {
		if (document.getElementById('fru').checked == true) {
			alert('You need to choose different languages');
			document.getElementById('nru').checked = true;
			document.getElementById('fru').checked = false;
			document.getElementById('fen').checked = true;
		}
	}
				
	if (document.getElementById('nen').checked == true) {
		if (document.getElementById('fen').checked == true) {
			alert('You need to choose different languages');
			document.getElementById('nen').checked = true;
			document.getElementById('fen').checked = false;
			document.getElementById('fru').checked = true;
		}
	}
				
	if (document.getElementById('nde').checked == true) {
		if (document.getElementById('fde').checked == true) {
			alert('You need to choose different languages');
			document.getElementById('nde').checked = true;
			document.getElementById('fde').checked = false;
			document.getElementById('fen').checked = true;
		}
	}
}

document.onkeydown = function checkKeycode(event) {
    var keycode;
	if(!event) var event = window.event;
	if (event.keyCode) keycode = event.keyCode; // для IE
	else if(event.which) keycode = event.which; // для всех браузеров
	var a1 = document.getElementById("btn");
	if (keycode == 13) { 
	    a1.click(); 
	}
}