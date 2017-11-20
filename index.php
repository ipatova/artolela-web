<?php
    session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Artolela-web</title>
		<link rel="stylesheet" href="css/choice.css" media="screen" type="text/css" />
        <script type="text/javascript" src="js/choice.js"></script>
	</head>
	<body>
		<h1>ARTOLELA-web — art of learning language</h1>
	        <br>	<form action="level.php" >
			<h1>Settings</h1>
			<div style = "font-weight:bold">Choose your native language </div>
			<div>
				<input type = "radio" value = "ru" name = "native" id = "nru" onChange = "check();" checked>
				<label for = "nru" >Русский</label>
				<input type = "radio" value = "en" name = "native" id = "nen" onChange = "check();">
				<label for = "nen">English</label>
				<input type = "radio" value = "de" name = "native" id = "nde" onChange = "check();">
				<label for = "nde">Deutsch</label>
			</div>
			<div style = "font-weight:bold">Choose your foreign language</div>
			<div>
				<input type = "radio" value = "ru" name = "foreign" id = "fru" onChange = "check();">
				<label for = "fru">Русский</label>
				<input type = "radio" value = "en" name = "foreign" id = "fen" onChange = "check();" checked>
				<label for = "fen" >English</label>
				<input type = "radio" value = "de" name = "foreign" id = "fde" onchange = "check();">
				<label for = "fde">Deutsch</label>
			</div>
			<div style = "font-weight:bold">Choose a level</div>
			<div>
				<span> 1 </span>
				<input id = "rangeeith" name = "r" type = "range" min = "1" step = "1" max = "50" onchange="document.getElementById('rangeValue').innerHTML = this.value;">
				<span> 50 </span>
				<br>
				<span id="rangeValue">26</span>
			</div>
			<div>
				<input class="btn"  type="submit" value="START" id= "btn"/>
			</div>			
			<hr style="background-color : #bebebe;"/>
			<hr style="background-color : #FFF; "/>
			<h5><a href="about.php" onClick = "window.onbeforeunload = null">About game</a></h5>
				                
			<?php
			    
                session_destroy();
            ?>
		</form>
	</body>
</html>
