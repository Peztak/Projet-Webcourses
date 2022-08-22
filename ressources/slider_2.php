<DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./ressources/css/slider_2.css">
	<title>webcourses</title>
</head>
<body>
	<!-- Slideshow container -->
	<div class="slideshow-container">

  	<!-- Full-width images with number and caption text -->
  	<div class="mySlides fade">
    	<div class="numbertext">1 / 3</div>
    	<img src="./ressources/images/photo.png">
    	<div class="text"></div>
  	</div>

  	<div class="mySlides fade">
    	<div class="numbertext">2 / 3</div>
    	<img src="./ressources/images/photo2.png">
    	<div class="text"></div>
  	</div>

  	<div class="mySlides fade">
    	<div class="numbertext">3 / 3</div>
    	<img src="./ressources/images/photo4.png">
    	<div class="text"></div>
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
  	</div>
<script type="text/javascript" src="./ressources/javascript/slider_2.js"></script>
</body>
</html>