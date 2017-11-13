<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Artolela</title>
		<link rel="stylesheet" href="style.css" media="screen" type="text/css" />
		<script>
			function check() {
				if (document.getElementById('nru').checked == true) {
					if (document.getElementById('fru').checked == true) {
						alert('You need to choose different languages');
						document.getElementById('nru').checked = true;
						document.getElementById('fru').checked = false;
						document.getElementById('fen').checked = true;
					}
				}
				
				if (document.getElementById('nen').checked == true) {
					if (document.getElementById('fen').checked == true) {
						alert('You need to choose different languages');
						document.getElementById('nen').checked = true;
						document.getElementById('fen').checked = false;
						document.getElementById('fru').checked = true;
					}
				}
				
				if (document.getElementById('nde').checked == true) {
					if (document.getElementById('fde').checked == true) {
						alert('You need to choose different languages');
						document.getElementById('nde').checked = true;
						document.getElementById('fde').checked = false;
						document.getElementById('fen').checked = true;
					}
				}
				
			}
		</script>
	</head>
	<body>
		<img src = "logo1.png" width = "700px" style = "padding-bottom:1vw;">
		<form action="level.php">
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
				<input class="btn"  type="submit" value="START" />
			</div>			
			<hr style="background-color : #bebebe;"/>
			<hr style="background-color : #FFF; "/>
			<h5><a href="about.php">About game</a></h5>
			<?php
			    $f = fopen('file.txt', 'w');
                fclose($f);
                file_put_contents('file.txt', '');
                $f1 = fopen('answers.txt', 'w');
                fclose($f1);
                file_put_contents('answers.txt', '');
            ?>

		</form>
	</body>
</html>
