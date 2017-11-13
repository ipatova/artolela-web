<?php
header('Content-Type: text/html; charset=utf-8'); // coding
    $file_lines = file('answers.txt');
    $answers = array();
    for ($i = 0; $i < count($file_lines); $i++) {
        $answers[$i] = explode('|', $file_lines[$i]);
    }
    for ($i = 0; $i < count($file_lines); $i++) {
        $k = $i+1;
        if ($answers[$i][0] == $answers[$i][4]) { 
            if ($answers[$i][1] == $answers[$i][7]) { $color2 = "red"; $weight2 = "bold"; }
            else {$color2 = "black"; $weight2 = "normal";}
            if ($answers[$i][2] == $answers[$i][7]) { $color3 = "red"; $weight3 = "bold"; }
            else {$color3 = "black"; $weight3 = "normal";}
            if ($answers[$i][3] == $answers[$i][7]) { $color4 = "red"; $weight4 = "bold"; }
            else {$color4 = "black"; $weight4 = "normal";}
            $color1 = "green"; $weight1 = "bold";
        }
        if ($answers[$i][1] == $answers[$i][4]) { 
            if ($answers[$i][0] == $answers[$i][7]) { $color1 = "red"; $weight1 = "bold"; }
            else {$color1 = "black"; $weight1 = "normal";}
            if ($answers[$i][2] == $answers[$i][7]) { $color3 = "red"; $weight3 = "bold"; }
            else {$color3 = "black"; $weight3 = "normal";}
            if ($answers[$i][3] == $answers[$i][7]) { $color4 = "red"; $weight4 = "bold"; }
            else {$color4 = "black"; $weight4 = "normal";}
            $color2 = "green"; $weight2 = "bold";
        }
        if ($answers[$i][2] == $answers[$i][4]) { 
            if ($answers[$i][0] == $answers[$i][7]) { $color1 = "red"; $weight1 = "bold"; }
            else {$color1 = "black"; $weight1 = "normal";}
            if ($answers[$i][1] == $answers[$i][7]) { $color2 = "red"; $weight2 = "bold"; }
            else {$color2 = "black"; $weight2 = "normal";}
            if ($answers[$i][3] == $answers[$i][7]) { $color4 = "red"; $weight4 = "bold"; }
            else {$color4 = "black"; $weight4 = "normal";}
            $color3 = "green"; $weight3 = "bold";
        }
        if ($answers[$i][3] == $answers[$i][4]) { 
            if ($answers[$i][0] == $answers[$i][7]) { $color1 = "red"; $weight1 = "bold"; }
            else {$color1 = "black"; $weight1 = "normal";}
            if ($answers[$i][1] == $answers[$i][7]) { $color2 = "red"; $weight2 = "bold"; }
            else {$color2 = "black"; $weight2 = "normal";}
            if ($answers[$i][2] == $answers[$i][7]) { $color3 = "red"; $weight3 = "bold"; }
            else {$color3 = "black"; $weight3 = "normal";}
            $color4 = "green"; $weight4 = "bold";
        }
        
        $s = $s.'<h1>Level '.$k.'</h1>
        <div>
            <img title = "Нет изображения" src = "http://artolela.krc.karelia.ru/'.$answers[$i][6].'" width = "300px" />
		</div>
		<div>
		    <a href = "'.$answers[$i][8].'"  target="_blank" style = "font-weight: bold;">'.$answers[$i][5].'</a>
		</div>
		<div>
		    <ul>
		        <li style = "list-style-position: inside;color: '.$color1.'; font-weight: '.$weight1.'">'.$answers[$i][0].'</li>
		        <li style = "list-style-position: inside;color: '.$color2.'; font-weight: '.$weight2.'">'.$answers[$i][1].'</li>
		        <li style = "list-style-position: inside;color: '.$color3.'; font-weight: '.$weight3.'">'.$answers[$i][2].'</li>
		        <li style = "list-style-position: inside;color: '.$color4.'; font-weight: '.$weight4.'">'.$answers[$i][3].'</li>
		    </ul>
		</div>
		
        ';
    }
    
    echo '<!DOCTYPE html>
            <html>
	           <head>
		          <meta charset="UTF-8">
		          <title>Artolela</title>
		          <link rel="stylesheet" href="s.css" media="screen" type="text/css" />
                  <link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox.css" media="screen" />
                  <script type="text/javascript" src="fancybox/jquery-1.3.2.min.js"></script>
                  <script type="text/javascript" src="fancybox/jquery.easing.1.3.js"></script>
                  <script type="text/javascript" src="fancybox/jquery.fancybox-1.2.1.pack.js"></script>
                  <script type="text/javascript" src="fancybox/photos.js"></script>
                  <script>
                    
                  </script>
		      </head>
	           <body>
	               <img src = "logo1.png" width = "700px" >
		            <center><form action = "check.php"> '.$s.'
		            <div>
		                <input class="btn"  type="submit" value="BACK" />
		            </div>
		            </form></center>
		      </body>
                </html>';
?>