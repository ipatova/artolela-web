<?php
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors','Off');
    session_start();
    if (count($_SESSION) == 0) {
        header("Location: choice.php");
    }
    $lines = floor(count($_SESSION)/13);
    header('Content-Type: text/html; charset=utf-8'); // coding
    $count = 0;
    for ($i = 0; $i < (count($_SESSION)-1)/13; $i++) {
        if ($_SESSION[$i."_right"] == $_SESSION[$i."_chosen"]) {
            $count++;
        }
    }
    if (count($_SESSION) != 0 ) {
        $ee = floor(count($_SESSION)/13)-1;
        $str = "";
        if ($_SESSION[$ee."_right"] == $_SESSION[$ee."_chosen"]) {
            $str = $str."Right answer.";
        }
        else {
            $str = $str."Wrong answer.<br>Right answer: ".$_SESSION[$ee."_right"];
        }
    }
    $ee = floor(count($_SESSION)/13);
    $tt = count($_SESSION)-1;
    $rr = $_SESSION["file"];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Artolela-web</title>
        <link rel="stylesheet" href="css/check.css" media="screen" type="text/css" />
        <link rel="stylesheet" href="css/popup_window.css" media="screen" type="text/css" />
        <script type="text/javascript" src="js/check.js"></script>
        <meta name="viewport" content="width=400, initial-scale=1">
    </head>
    <body>
       <h1>ARTOLELA-web</h1>
	   <br> 
	   <form action = "index.php">
            <h1>Results</h1>
            <div style = "font-size: 40px; font-weight: bold;">
                RIGHT ANSWERS:
            </div>
        	<div style = "font-size: 80px; font-weight: bold;">
        	    <?=$count?>/<?=$lines?>
        	</div>
        	<div style = "padding-top: 0.5vw">
    			<input class="btn"  type="submit" value="NEW GAME" id = "btn"/>
    		</div>	
    		<div style = "padding-top: 0.1vw">
    			<hr style="background-color : #bebebe;"/>
    			<hr style="background-color : #FFF; "/>
    		</div>
    		<div >
    			<h5><a href="answers.php">Look answers</a></h5>
    		</div>
	    </form>
	    <div id = "msg_pop" onclick="document.getElementById('msg_pop').style.display='none'; return false;">
            <h4>Answer for question <?=floor((count($_SESSION)-1)/13)?></h4>
            <span><?=$str?></span>
        </div>  
        <script type="text/javascript">
            var rr = "<? echo $rr; ?>";
            if (rr == "level") {
                var delay_popup = 100;
                var msg_pop = document.getElementById('msg_pop');
                setTimeout("document.getElementById('msg_pop').style.display='block';document.getElementById('msg_pop').className += 'fadeIn';", delay_popup);
            }
       </script>  
	</body>
</html>