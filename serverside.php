<?php
//Connection to DB
$host = 'localhost';
$user = 'root';
$pass = 'usbw';
$port = '3307';
$db= 'guestbook';
$connection = mysql_connect($host, $user, $pass, $port);
mysql_select_db($db, $connection);
//Робимо перевірку, чи всі поля заповнив користувач і чи вірно він ввів email
if (!empty($_POST['name']) && !empty($_POST['comment']) && preg_match("/.+@.+\..+/i", $_POST['email']) != 0)
    { 
		//якщо так, то записуємо введені дані до БД	
		$date = time(); //записуємо дату автоматично
        $sql="INSERT INTO guestbook (
		name, email, response, comment, date_auto) 
		VALUES (
		'".mysql_real_escape_string($_POST['name'])."'
		,'".mysql_real_escape_string($_POST['email'])."'
		,'".mysql_real_escape_string($_POST['response'])."'
		,'".mysql_real_escape_string($_POST['comment'])."'
		,'".mysql_real_escape_string($date)."')";

        if (mysql_query($sql)) {echo '<p>Дякуємо за ваш відгук!</p>';} else {echo '<p>Error</p>';} //при вдалому виконанні операції виводимо подяку, при невдачі - повідомлення про помилку
    }
else { echo '<p>Заповніть усі поля, вводьте реальні дані!</p>';} // просимо користувача заповнити усі поля, якщо він цього не зробив
