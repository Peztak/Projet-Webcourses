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
    	<img src="#" style="width:100%">
    	<div class="text">Caption Text</div>
  	</div>

  	<div class="mySlides fade">
    	<div class="numbertext">2 / 5</div>
    	<img src="#" style="width:100%">
    	<div class="text">Caption Two</div>
  	</div>

  	<div class="mySlides fade">
    	<div class="numbertext">3 / 5</div>
    	<img src="#" style="width:100%">
    	<div class="text">Caption Three</div>
  	</div>

  	<div class="mySlides fade">
    	<div class="numbertext">4 / 5</div>
    	<img src="#" style="width:100%">
    	<div class="text">Caption Four</div>
  	</div>

  	<div class="mySlides fade">
    	<div class="numbertext">5 / 5</div>
    	<img src="#" style="width:100%">
    	<div class="text">Caption Five</div>
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