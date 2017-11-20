//Click button "BACK" in page "answers.php", when user click button "Enter" onn keyboard
document.onkeydown = function checkKeycode(event) {
	var keycode;
	if(!event) var event = window.event;
	if (event.keyCode) keycode = event.keyCode; // for IE
	else if(event.which) keycode = event.which; // for all browsers
	var a1 = document.getElementById("btn");
	if (keycode == 13) {
	    a1.click(); 
	}
}