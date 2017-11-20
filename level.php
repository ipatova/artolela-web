<?php
    require_once('preparation/results.php');
    
    $answer1 = $arr[0]; $answer2 = $arr[1]; $answer3 = $arr[2]; $answer4 = $arr[3];
    
    if ($answer1 == $picture_and_info[$num_f]) { $rr1 = "checked"; }
    else {$rr1 = "nochecked1";}
    if ($answer2 == $picture_and_info[$num_f]) { $rr2 = "checked"; }
    else {$rr2 = "nochecked2";}
    if ($answer3 == $picture_and_info[$num_f]) { $rr3 = "checked"; }
    else {$rr3 = "nochecked3";}
    if ($answer4 == $picture_and_info[$num_f]) { $rr4 = "checked"; }
    else {$rr4 = "nochecked4";}
    
    session_start();
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
    
?>    
<!DOCTYPE html>
                <html>
	                <head>
		                <meta charset="UTF-8">
		                
		                <title>Artolela-web</title>
		                
		                <link rel="stylesheet" href="css/popup_window.css" media="screen" type="text/css" />
		                <link rel="stylesheet" href="css/level6.css" media="screen" type="text/css" />
                        <link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox.css" media="screen" />
                        
                    	<script type="text/javascript" src="fancybox/jquery-1.3.2.min.js"></script>
                    	<script type="text/javascript" src="fancybox/jquery.easing.1.3.js"></script>
                    	<script type="text/javascript" src="fancybox/jquery.fancybox-1.2.1.pack.js"></script>
                    	<script type="text/javascript" src="fancybox/photos.js"></script>
		            </head>
	                <body>
	                   <h1>ARTOLELA-web — art of learning language</h1>
	                   <br>
		                <form action = "process.php">
		                    <h1>Level <?=$lines?></h1>
		                    <div>
				                <a class="gallery" rel="group" href="http://artolela.krc.karelia.ru/<?=$papka?>/<?=$picture_and_info[3]?>">
				                    <img  src="http://artolela.krc.karelia.ru/<?=$papka?>/<?=$picture_and_info[3]?>" width = "300px" align = "top" onError="this.src='ni.png'"/>
				                </a>
				                <a href = <?=$all_way?> class = "wiki" target = "_blank"> W</a>
			                </div>
    		                <div>
    		                   <input type = "radio" value = "<?=$answer1?>|<?=$answer2?>|<?=$answer3?>|<?=$answer4?>|<?=$picture_and_info[$num_f]?>|<?=$picture_and_info[$num_n]?>|<?=$papka?>/<?=$picture_and_info[3]?>|<?=$answer1?>|level.php?native=<?=$n?>&foreign=<?=$f?>&r=<?=$_GET[r]?>|<?=$_GET[r]?>|<?=$all_way?>|<?=$table?>|<?=$pr?>" name = "answers" id = <?=$rr1?> checked>
    				            <label id = "<?=$answer1?>" for = "<?=$rr1?>"><?=$answer1?></label>
    				            <br>
    				            <input type = "radio" value = "<?=$answer1?>|<?=$answer2?>|<?=$answer3?>|<?=$answer4?>|<?=$picture_and_info[$num_f]?>|<?=$picture_and_info[$num_n]?>|<?=$papka?>/<?=$picture_and_info[3]?>|<?=$answer2?>|level.php?native=<?=$n?>&foreign=<?=$f?>&r=<?=$_GET[r]?>|<?=$_GET[r]?>|<?=$all_way?>|<?=$table?>|<?=$pr?>" name = "answers" id = <?=$rr2?> >
    				            <label id = "<?=$answer2?>" for = "<?=$rr2?>"><?=$answer2?></label>
    				            <br>
    				           <input type = "radio" value = "<?=$answer1?>|<?=$answer2?>|<?=$answer3?>|<?=$answer4?>|<?=$picture_and_info[$num_f]?>|<?=$picture_and_info[$num_n]?>|<?=$papka?>/<?=$picture_and_info[3]?>|<?=$answer3?>|level.php?native=<?=$n?>&foreign=<?=$f?>&r=<?=$_GET[r]?>|<?=$_GET[r]?>|<?=$all_way?>|<?=$table?>|<?=$pr?>" name = "answers" id = <?=$rr3?> >
    				            <label id = "<?=$answer3?>" for = "<?=$rr3?>"><?=$answer3?></label>
    				            <br>
    				            <input type = "radio" value = "<?=$answer1?>|<?=$answer2?>|<?=$answer3?>|<?=$answer4?>|<?=$picture_and_info[$num_f]?>|<?=$picture_and_info[$num_n]?>|<?=$papka?>/<?=$picture_and_info[3]?>|<?=$answer4?>|level.php?native=<?=$n?>&foreign=<?=$f?>&r=<?=$_GET[r]?>|<?=$_GET[r]?>|<?=$all_way?>|<?=$table?>|<?=$pr?>" name = "answers" id = <?=$rr4?> >
    				            <label id = "<?=$answer4?>" for = "<?=$rr4?>"><?=$answer4?></label>

    				        </div>
    				        <div>
				                <input class="btn"  type="submit" value="NEXT" id = "btn"/>
				                <input class = "btn" type = "button" id = "btn1" value="NEW GAME" onClick = "window.location.href = 'choice.php'"/>
			                </div>	
		                </form>
		                <div id = "msg_pop" onclick="document.getElementById('msg_pop').style.display='none'; return false;">
                            <h4>Answer for question <?=count($_SESSION)/13?></h4>
                            <span><?=$str?></span>
                        </div>  
                        <script type="text/javascript">
                                var tt = <?=count($_SESSION); ?>;
                                if (tt/13 != 0) {
                                    var delay_popup = 100;
                                    var msg_pop = document.getElementById('msg_pop');
                                    setTimeout("document.getElementById('msg_pop').style.display='block';document.getElementById('msg_pop').className += 'fadeIn';", delay_popup);
                                }
                        </script> 
                        <script>
                            document.onkeydown = function checkKeycode(event) {
                            	var keycode;
                            	if(!event) var event = window.event;
                            	if (event.keyCode) keycode = event.keyCode; // для IE
                            	else if(event.which) keycode = event.which; // для всех браузеров
                            	var a1 = document.getElementById("<?php echo $rr1; ?>");
                            	var a2 = document.getElementById("<?php echo $rr2; ?>");
                            	var a3 = document.getElementById("<?php echo $rr3; ?>");
                            	var a4 = document.getElementById("<?php echo $rr4; ?>");
                            	if ((keycode == 38) && (a1.checked)) { a4.checked = true; return false; }
                            	else if ((keycode == 38) && (a2.checked)) { a1.checked = true; return false; }
                            	else if ((keycode == 38) && (a3.checked)) { a2.checked = true; return false; }
                            	else if ((keycode == 38) && (a4.checked)) { a3.checked = true; return false; }
                            	else if ((keycode == 40) && (a1.checked)) { a2.checked = true; return false; }
                            	else if ((keycode == 40) && (a2.checked)) { a3.checked = true; return false; }
                            	else if ((keycode == 40) && (a3.checked)) { a4.checked = true; return false; }
                            	else if ((keycode == 40) && (a4.checked)) { a1.checked = true; return false; }
                            	else if (keycode == 13) {document.getElementById("btn").click();}
                            }
                        </script>
		            </body>
                </html>