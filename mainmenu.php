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
			<a href="mainmenu.php" class="text1">Главная</a>
			<a href="" class="text2">Карта КФЕН</a>
			<a href="" class="text3">Меню "СЭРГЭЛЭЭХ"</a>
			<a href="" class="text4">Расписание СУНЦ</a>
			<a href="lk.php" class="text5">Личный кабинет</a>
		</div>
		<div class="center">
			<div class="slideshow-container">
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
  				<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  				<a class="next" onclick="plusSlides(1)">&#10095;</a>
			</div>
			<br>
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