<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>modalwindow</title>
	<link rel="stylesheet" type="text/css" href="modalwindow.css">
	<link rel="stylesheet" type="text/css" href="first.css">
</head>
<body style="margin: 0;">
	<div class="container">
		<div class="header">
			<div class="avatar"></div>
		</div>
		<button class="btn1"><a class="text1" href="#openModal">Войти</a>
			<div id="openModal" class="modal">
  				<div class="modal-dialog">
    				<div class="modal-content">
      					<div class="modal-header">
       						<h3 class="modal-title">Вход</h3>
        					<a href="#close" title="Close" class="close">×</a>
      					</div>
      				<div class="modal-body">
      					<form action="mainmenu.php" method="GET">
        					<input type="text" name="" placeholder="Имя" class="input1">
        					<input type="text" name="" placeholder="Почта" class="input2">
        					<input type="text" name="" placeholder="Пароль" class="input3">
        					<div class="btn5"><p class="text3">ВХОД</p></div>
        					<p>Нет учетной записи? <a href="#openModal2">Зарегистрироваться</a></p>
        					<a href="" style="text-decoration: none;">Забыли пароль?</a>
        				</form>
      				</div>
    			</div>
  			</div>
		</button>
		<button class="btn2"><a class="text2" href="#openModal2">Регистрация</a>
			<div id="openModal2" class="modal2">
  				<div class="modal-dialog2">
    				<div class="modal-content2">
      					<div class="modal-header2">
       						<h3 class="modal-title2">Регистрация</h3>
        					<a href="#close2" title="Close" class="close2">×</a>
      					</div>
      				<div class="modal-body2">

        				<input type="text" name="" placeholder="Имя" class="input1">
        				<input type="text" name="" placeholder="Почта" class="input2">
        				<input type="text" name="" placeholder="Пароль" class="input3">
        				<input type="text" name="" placeholder="Подтвердить пароль" class="input3">
        				<div class="btn5"><p class="text3">ЗАРЕГЕСТРИРОВАТЬСЯ</p></div>
        				<p>Есть учетная запись? <a href="#openModal">Войти</a></p>

      				</div>
    			</div>
  			</div>
		</button>
		<button class="btn3">
			<img src="google.png">
		</button>
		<button class="btn4">
			<img src="vk.png">
		</button>
	</div>
</body>
	
</html>