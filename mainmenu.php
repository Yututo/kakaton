<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>mainmenu</title>
	<link rel="stylesheet" type="text/css" href="second.css">
	<link rel="stylesheet" type="text/css" href="secondpages.css">

</head>
<body style="margin: 0px;">
	<div class="container">
		<div class="header">
			<img src="logo2.png" class="logo2">
			<p class="text1">Главная</p>
			<p class="text2">Карта КФЕН</p>
			<p class="text3">Меню "СЭРГЭЛЭЭХ"</p>
			<p class="text4">Расписание СУНЦ</p>
			<p class="text5">Личный кабинет</p>
		</div>
		<div class="center">
			<!-- Slideshow container -->
			<div class="slideshow-container">

  				<!-- Full-width images with number and caption text -->
  				<div class="mySlides fade">
    				<div class="numbertext"></div>
    				<img src="1.png" style="width:100%">
    				<div class="text">Caption first</div>
  				</div>

 				<div class="mySlides fade">
    				<div class="numbertext"></div>
    				<img src="1.png" style="width:100%">
    				<div class="text">Caption Two</div>
 				</div>

  				<div class="mySlides fade">
    				<div class="numbertext"></div>
    				<img src="1.png" style="width:100%">
    				<div class="text">Caption Three</div>
				</div>

  				<!-- Next and previous buttons -->
  				<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  				<a class="next" onclick="plusSlides(1)">&#10095;</a>
			</div>
			<br>

			<!-- The dots/circles -->
			<div style="text-align:center">
  				<span class="dot" onclick="currentSlide(1)"></span>
  				<span class="dot1" onclick="currentSlide(2)"></span>
  				<span class="dot2" onclick="currentSlide(3)"></span>
			</div>
		</div>
	</div>

	<script src="secondpagesjs.js"></script>

</body>
</html>