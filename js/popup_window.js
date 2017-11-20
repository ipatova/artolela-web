jQuery(document).ready(function($){
    $("#msg_close").click(function () {
        $.cookie("msg_pop", "", {expires: 0} );
        $("#msg_pop").hide();
    });
    if ( $.cookie("msg_pop") == null ) {
        setTimeout(function() {
            $("#msg_pop").addClass("fadeIn");
            $("#msg_pop").show();
        }, 2000)
    }
});