<?php
    
    header('Content-Type: text/html; charset=utf-8'); // coding
    $lines = count(file('file.txt'));
    $fp = fopen('file.txt', 'r');
    $arr = file('file.txt');
    $count = 0; 
    foreach ($arr as $a) {
        $a = (int)$a;
        if ($a == 1) $count++; 
    }
    echo '<!DOCTYPE html>
                <html>
	                <head>
		                <meta charset="UTF-8">
		                <title>Artolela</title>
		                <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
		            </head>
	                <body>
	                    <img src = "logo1.png" width = "700px" style = "padding-bottom:1vw;">
		                <form action = "index.php">
		                    <h1>Results</h1>
    				        <div style = "font-size: 40px; font-weight: bold;">
    				            RIGHT ANSWERS:
    				        </div>
    				        <div style = "font-size: 80px; font-weight: bold;">
    				            '.$count.'/'.$lines.'
    				        </div>
    				        <div style = "padding-top: 0.5vw">
				                <input class="btn"  type="submit" value="NEW GAME" />
			                </div>	
			                <div style = "padding-top: 0.1vw">
			                    <hr style="background-color : #bebebe;"/>
			                    <hr style="background-color : #FFF; "/>
			                 </div>
			                <div >
			                       <h5><a href="answers.php">Look answers</a></h5>
			                </div>
		                </form>
		            </body>
                </html>';
?>
