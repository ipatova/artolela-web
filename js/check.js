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