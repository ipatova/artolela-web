<?php
    session_start();
    if (count($_SESSION) == 0) {
        header("Location: choice.php");
    }
    $_SESSION["file"] = "answers";
    header('Content-Type: text/html; charset=utf-8'); // coding
    for ($i = 0; $i < (floor((count($_SESSION)-1)/13)); $i++) {
        $k = $i+1;
        if ($_SESSION[$i."_answer1"] == $_SESSION[$i."_right"]) {
            if ($_SESSION[$i."_answer2"] == $_SESSION[$i."_chosen"]) { $color2 = "red"; $weight2 = "bold"; }
            else { $color2 = "black"; $weight2 = "normal"; }
            if ($_SESSION[$i."_answer3"] == $_SESSION[$i."_chosen"]) { $color3 = "red"; $weight3 = "bold"; }
            else { $color3 = "black"; $weight3 = "normal"; }
            if ($_SESSION[$i."_answer4"] == $_SESSION[$i."_chosen"]) { $color4 = "red"; $weight4 = "bold"; }
            else { $color4 = "black"; $weight4 = "normal"; }
            $color1 = "green"; $weight1 = "bold";
        }
        if ($_SESSION[$i."_answer2"] == $_SESSION[$i."_right"]) {
            if ($_SESSION[$i."_answer1"] == $_SESSION[$i."_chosen"]) { $color1 = "red"; $weight1 = "bold"; }
            else { $color1 = "black"; $weight1 = "normal"; }
            if ($_SESSION[$i."_answer3"] == $_SESSION[$i."_chosen"]) { $color3 = "red"; $weight3 = "bold"; }
            else { $color3 = "black"; $weight3 = "normal"; }
            if ($_SESSION[$i."_answer4"] == $_SESSION[$i."_chosen"]) { $color4 = "red"; $weight4 = "bold"; }
            else { $color4 = "black"; $weight4 = "normal"; }
            $color2 = "green"; $weight2 = "bold";
        }
        if ($_SESSION[$i."_answer3"] == $_SESSION[$i."_right"]) {
            if ($_SESSION[$i."_answer1"] == $_SESSION[$i."_chosen"]) { $color1 = "red"; $weight1 = "bold"; }
            else { $color1 = "black"; $weight1 = "normal"; }
            if ($_SESSION[$i."_answer2"] == $_SESSION[$i."_chosen"]) { $color2 = "red"; $weight2 = "bold"; }
            else { $color2 = "black"; $weight2 = "normal"; }
            if ($_SESSION[$i."_answer4"] == $_SESSION[$i."_chosen"]) { $color4 = "red"; $weight4 = "bold"; }
            else { $color4 = "black"; $weight4 = "normal"; }
            $color3 = "green"; $weight3 = "bold";
        }
        if ($_SESSION[$i."_answer4"] == $_SESSION[$i."_right"]) {
            if ($_SESSION[$i."_answer1"] == $_SESSION[$i."_chosen"]) { $color1 = "red"; $weight1 = "bold"; }
            else { $color1 = "black"; $weight1 = "normal"; }
            if ($_SESSION[$i."_answer2"] == $_SESSION[$i."_chosen"]) { $color2 = "red"; $weight2 = "bold"; }
            else { $color2 = "black"; $weight2 = "normal"; }
            if ($_SESSION[$i."_answer3"] == $_SESSION[$i."_chosen"]) { $color3 = "red"; $weight3 = "bold"; }
            else { $color3 = "black"; $weight3 = "normal"; }
            $color4 = "green"; $weight4 = "bold";
        }
    
        $s = $s.'<h1>Level '.$k.'</h1>
        <div>
            <img src = "http://artolela.krc.karelia.ru/'.$_SESSION[$i."_way_f"].'" width = "300px" />
		</div>
		<div>
		    <a href = "'.$_SESSION[$i."_way_w"].'"  target="_blank" style = "font-weight: bold;">'.$_SESSION[$i."_name"].'</a>
		</div>
		<div>
		    <ul>
		        <li style = "list-style-position: inside;color: '.$color1.'; font-weight: '.$weight1.'">'.$_SESSION[$i."_answer1"].'</li>
		        <li style = "list-style-position: inside;color: '.$color2.'; font-weight: '.$weight2.'">'.$_SESSION[$i."_answer2"].'</li>
		        <li style = "list-style-position: inside;color: '.$color3.'; font-weight: '.$weight3.'">'.$_SESSION[$i."_answer3"].'</li>
		        <li style = "list-style-position: inside;color: '.$color4.'; font-weight: '.$weight4.'">'.$_SESSION[$i."_answer4"].'</li>
		    </ul>
		</div>';
    }
    echo '<!DOCTYPE html>
            <html>
                <head>
                    <meta charset="UTF-8">
		            <title>Artolela-web</title>
		            <link rel="stylesheet" href="css/answers.css" media="screen" type="text/css" />
                    <link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox.css" media="screen" />
                    <script type="text/javascript" src="fancybox/jquery-1.3.2.min.js"></script>
                    <script type="text/javascript" src="fancybox/jquery.easing.1.3.js"></script>
                    <script type="text/javascript" src="fancybox/jquery.fancybox-1.2.1.pack.js"></script>
                    <script type="text/javascript" src="fancybox/photos.js"></script>
                    <script type="text/javascript" src="js/answers.js"></script>
                    <meta name="viewport" content="width=400, initial-scale=1">
                        <style>
                            @media (max-width: 480px) {
                                form {
                                	position        : relative;
                                	width           : 370px;
                                	border-radius   : 5px;
                                	margin          : 0 auto;
                                	background-color: #e3e3e3;
                                	border-top      : 1px solid #f1f1f1;
                                	box-shadow      : 0 0 0 1px #626262 , 0 0 0 6px rgba(150,150,150,.5) , 0 0 0 7px #cbbdbc , 0 0 0 8px #78495b;
                                	padding-bottom  : 5px;
                                }
                            }
                        </style>
		        </head>
	            <body>
	                <h1>ARTOLELA-web</h1>
	                   <br> <center><form action = "check.php"> '.$s.'
		            <div>
		                <input class="btn"  type="submit" value="BACK" id = "btn"/>
		            </div>
		            </form></center>
		            
		        </body>
            </html>';
?>