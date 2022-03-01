<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="slider.css">
	<title>webcourses</title>
</head>
<body>
	<!-- Slideshow container -->
	<div class="slideshow-container">

  	<!-- Full-width images with number and caption text -->
  	<div class="mySlides fade">
    	<div class="numbertext">1 / 5</div>
    	<img src="coureur.jpg" style="width:100%">
    	<div class="text">Profitez des plaisirs du sport seul...</div>
  	</div>

  	<div class="mySlides fade">
    	<div class="numbertext">2 / 5</div>
    	<img src="coureur2.jpg" style="width:100%">
    	<div class="text">Ou à plusieurs...</div>
  	</div>

  	<div class="mySlides fade">
    	<div class="numbertext">3 / 5</div>
    	<img src="canoe.jpg" style="width:100%">
    	<div class="text">Sur l'eau...</div>
  	</div>

  	<div class="mySlides fade">
    	<div class="numbertext">4 / 5</div>
    	<img src="velo.jpg" style="width:100%">
    	<div class="text">Ou à vélo...</div>
  	</div>

  	<div class="mySlides fade">
    	<div class="numbertext">5 / 5</div>
    	<img src="groupe.jpg" style="width:100%">
    	<div class="text">La bonne humeur sera au rendez-vous avec nous!</div>
  	</div>
  	<!-- Next and previous buttons -->
  	<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  	<a class="next" onclick="plusSlides(1)">&#10095;</a>
	</div>
	<br>

	<!-- The dots/circles -->
	<div style="text-align:center">
  	<span class="dot" onclick="currentSlide(1)"></span>
  	<span class="dot" onclick="currentSlide(2)"></span>
  	<span class="dot" onclick="currentSlide(3)"></span>
  	<span class="dot" onclick="currentSlide(4)"></span>
  	<span class="dot" onclick="currentSlide(5)"></span>
	</div>

<script type="text/javascript" src="slider.js"></script>
</body>
</html>