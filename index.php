<?php
date_default_timezone_set('Europe/Kiev'); //встановлюємо часову зону, бо чомусь не вдалось це зробити в налаштуваннях локального серверу
require_once( __DIR__ . '/functions.php'); //підключаємо файл з нашими функціями

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Гостьова книга</title>
	<script type="text/javascript" src="js/jquery-1.5.2.min.js"></script> <!-- Підключаємо бібліотеку jQuery -->
	<script type="text/javascript" src="js/functions.js"></script> <!-- Підключаємо функції JS -->
	<link href="style.css" type="text/css" rel="stylesheet"> <!-- Підключаємо стилі CSS-->
</head>
<body>
<!--Створюємо форму для вводу коментаря -->
	<div id="form"> <!-- START DIV form-->
		<form onsubmit = "return checkForm(this)" method = "POST">
			Введіть ваші <b>Ім'я:</b> <input type = "text" name = "txt_name" id = "name" />&nbsp;
			та <b>email:</b> <input type = "text" name = "txt_email" id = "email" /><br /><br />
			Яке Ваше враження? 
			<select name = "txt_response" id = "response">
				<option selected value="Good">Позитивне</option>
				<option value="Bad">Негативне</option>
			</select><br />
			Ваш коментар:<br />
			<textarea style = "width: 50%" rows=10 name = "txt_comment" id = "comment" ></textarea>
			<div id="formButtons"> <!-- START DIV formButtons-->
				<input type = "submit"  value = "Залишити відгук" onclick = "senddata();" id = "submit" />
				<input type = "reset"  value = "Очистити поля" />
				<a href="http://www.sendflowers.ua/">Повернутись на сайт</a>
			</div> <!-- END DIV formButtons-->
		</form>
	</div><!--END DIV form -->
	<br />
	<div class="queryType"><!--START DIV queryType -->
		<div id="queryType1">
			<a href="<?= $_SERVER['PHP_SELF'] ?>"> Читати найновіші коментарі </a>
		</div>
		<div id="queryType2">
			<a href="<?= $_SERVER['PHP_SELF'] ?>?response=ordinary"> Читати з першого коментаря </a>
		</div>	
	</div>	
	<div class="queryType">
		<div id="queryType3">
			<a href="<?= $_SERVER['PHP_SELF'] ?>?response=good"> Читати лише позитивні відгуки </a>
		</div>
		<div id="queryType4">	
			<a href="<?= $_SERVER['PHP_SELF'] ?>?response=bad"> Читати лише негативні відгуки </a>
		</div>	
	</div>
	</div><!--END DIV queryType -->
	<!--Спеціальний блок для виводу повідомлень функції, яка відповідає за внесення даних у БД -->
	<div id="resp"></div>
	<!--Створюємо таблицю для виводу записів із БД, за який відповідає функція get_responses(); -->
	<div id="responses">
		<table>
			<?php
				get_responses();
			?>
		</table>
	</div>
</body>
</html>

