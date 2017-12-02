<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Artolela-web</title>
		<link rel="stylesheet" href="css/about.css" media="screen" type="text/css" />
		<script type="text/javascript" src="js/about.js"></script>
        <style>
            form {
            	position        : relative;
            	width           : 700px;
            	border-radius   : 5px;
            	margin          : 0 auto;
            	background-color: #e3e3e3;
            	border-top      : 1px solid #f1f1f1;
            	box-shadow      : 0 0 0 1px #626262 , 0 0 0 6px rgba(150,150,150,.5) , 0 0 0 7px #cbbdbc , 0 0 0 8px #78495b;
            	padding-bottom  : 5px;
        }
        </style>
	</head>
	<body>
	    <center><h1>ARTOLELA-web</h1></center>
	   <br>
	   <form action="index.php">
			<h1>About</h1>
			<div style = "margin-right: 3px; margin-left: 3px;">
				<i>"Artolela-web"</i> is an educational game, the aim of which is to improve the skills of foreign languages with the help of famous paintings. 
				<i>"Artolela-web"</i> not only helps users in learning languages, but also allows to expand the ken, as during the game the user gets acquainted with the masterpieces of painting.
			</div>
			<div style = "margin-right: 3px; margin-left: 3px;">
				<i>"Artolela-web"</i> is a web application based on a collection of pictures from the Wikimedia Commons and their description on the Wikimedia site, 
				which includes the names of pictures in English, Russian and German. The choice of languages was based on the preferences of the program's developers. 
				To create the game, you could choose other languages, as the Wikimedia contains descriptions of pictures in many languages, for example, Italian, Bashkir, Ukrainian.
			</div>
			<div style = "text-align: left;">
			    <img src = "http://artolela.krc.karelia.ru/en-ru/Eglon_van_der_Neer_-_Children_with_a_Cage_and_a_Cat_-_WGA16498.jpg" width = "200px" style = "padding-left: 10px; margin-left: 7px; margin-right: 7px; float:left;"/>
			    <div style = "margin-right: 3px; margin-left: 3px;">
			        Consider the picture: "<a href = "https://commons.wikimedia.org/wiki/File:Eglon_van_der_Neer_-_Children_with_a_Cage_and_a_Cat_-_WGA16498.jpg" style = "color:black;text-decoration:underline;">Children with a bird and a cat.</a>" 
			        The image file is stored on the Wikimedia Commons. 
			        The Wikimedia Database contains a description of the picture: the name of the picture in Dutch and its translations into Russian, English and other languages, 
			        location, artist, sizes and more. In this application only the names in Russian and English were used.
                </div>
                <div style = "margin-right: 3px; margin-left: 3px;">
                    The application contains a choice of languages, the ability to select the number of levels, the ability to view correct and incorrect answers, and the number of correct answers.
                    "Artolela-web" is the first version of the game. In the future, new languages will be added, the number of pictures will increase, registration in the 
                    game will be added and statistics of the user will be saved.
                </div>
                <div style = "margin-right: 3px; margin-left: 3px;">
                    A student of the Institute of Mathematics and Information Technologies of <a href = "http://petrsu.ru" style = "color:black;text-decoration:underline;">Petrozavodsk State University</a> Yulia Ipatova is working on this project.
                </div>
			<div>
				<input class="btn"  type="submit" value="BACK" id = "btn"/>
			</div>			
			
		</form>
	</body>
</html>