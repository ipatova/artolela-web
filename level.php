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
?>    
<!DOCTYPE html>
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
                    	    function f() {
                    	        var s = document.getElementsByName("answers");
                    	        var userName = '<?php echo $picture_and_info[$num_f];?>';
                                for (i = 0; i < s.length; i++) {
                                    if (s[i].checked) {
                                        if (s[i].id == "checked") {
                                            alert("Верно");
                                        }
                                        else {
                                            alert ("Неверно. \r\nВерный ответ: " + userName);
                                        }
                                    }
                                }
                    	    }
                    	</script>
		            </head>
	                <body>
	                    <img src = "logo1.png" width = "700px" style = "padding-bottom:1vw;">
		                <form action = "process.php">
		                    <h1>Level <?=$lines?></h1>
		                    <div>
				                <a class="gallery" rel="group" href="http://artolela.krc.karelia.ru/<?=$papka?>/<?=$picture_and_info[3]?>">
				                    <img title = "Нет изображения" src="http://artolela.krc.karelia.ru/<?=$papka?>/<?=$picture_and_info[3]?>" width = "300px" />
				                </a>
			                </div>
    				        <div>
    				            <a href = "<?=$all_way?>"  target="_blank" style = "font-weight: bold;"><?=$picture_and_info[$num_n]?></a>
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
				                <input class="btn"  type="submit" value="NEXT" onCLick = "f()"/>
			                </div>	
		                </form>
		            </body>
                </html>