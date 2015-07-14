<?php
//функція для виводу записів із БД
function get_responses() {
	//спочатку записуємо дані для підключення до БД
	$host = 'localhost';
	$user = 'root';
	$pass = 'usbw';
	$port = '3307';
	$db= 'guestbook';
	$connection = mysql_connect($host, $user, $pass, $port);
	mysql_select_db($db, $connection); //встановлюємо підключення до бази днаих
	
			$query1 = "SELECT * FROM guestbook ORDER BY date_auto DESC"; //зворотній порядок виводу записів
			$query2 = "SELECT * FROM guestbook ORDER BY date_auto"; //звичайний вивід записів
			$query3 = "SELECT * FROM guestbook WHERE response = 'Good' ORDER BY date_auto"; //читати лише позитиві відгуки
			$query4 = "SELECT * FROM guestbook WHERE response = 'Bad' ORDER BY date_auto"; //лише негативні відгуки
			//Робимо примітивний рутер для того, щоб користувач мав можливість сортувати коментарі:
			if (isset($_GET['response'])){
				switch ($_GET['response']){
					case 'ordinary': $query = $query2; //виведуться коментарі починаючи з першого
					break;
					case 'good': $query = $query3; //виведуться лише позитивні відгуки
					break;
					case 'bad': $query = $query4; //виведуться лише негативні відгуки
					break;
				}
			}	else { $query = $query1; }
				
				$result = mysql_query($query, $connection);
				$num_row = mysql_num_rows($result);
				echo '<div id="num_row"><p>Знайдено ' . $num_row . ' коментарів:</p></div>';
				//За допомогою циклу перебираємо всі записи БД і виводимо їх на екран
				for ($i = 0; $i < $num_row; $i++)
				{
					$name = mysql_result($result, $i, "name");
					$email = mysql_result($result, $i, "email");
					$response = mysql_result($result, $i, "response");
					$comment = mysql_result($result, $i, "comment");
					$date = mysql_result($result, $i, "date_auto");
					$show_date = date("H:i:s m/d/Y", $date); //Виводимо дату у легко зрозумілій формі
					//Реалізуємо зміну кольорів запису, щоб легше їх розділяти
					if ($i % 2)
					{
						$bg_color = "#EEEEEE";
					}
					else
					{
						$bg_color = "#E0E0E0";
					}
					//Присвоюємо негативним записам червоний колір, позитивним - зелений
					if($response == 'Bad')
					{
						$colour = "#FF0000";
						$response = "Негативне";
					}
					else
					{
						$colour = "#008B00";
						$response = "Позитивне";
					}
					//виводимо записи таблицею
					
					echo	'<tr>
							<td width = "100%" bgcolor=" ' . $bg_color . ' ">'; //колір запису
								echo '<b>Ім\'я:</b> <a href="mailto:' . $email . '">' . $name . '</a>'; //виводимо ім'я з можливістю написати email клментатору
								echo '<span id="date"><b>Дата: </b> ' . $show_date . '</span>'; //виводимо дату зправа від імені
								//виводимо враження; позитивне - зеленим, негативне - червоним
								echo '<br /><b>Враження:<span style="color: ' . $colour . ' "> ' . $response . '</span></b>'; 
								//виводимо сам коментар
								echo '<br /><b>Коментар:</b><br />' . $comment . '
							</td>
						</tr>
					';
				}
			
			
}