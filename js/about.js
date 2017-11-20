//Click button "back" in page "about.php", when user click button "Enter" on keyboard
document.onkeydown = function checkKeycode(event) {
    var keycode;
	if(!event) var event = window.event;
	if (event.keyCode) keycode = event.keyCode; // for IE
	else if(event.which) keycode = event.which; // for all browsers
	if (keycode == 13) {
	    document.getElementById("btn").click();
	}
}
