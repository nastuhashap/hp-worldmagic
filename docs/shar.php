
<a href="#win1">Инструкция </a>

<a href="#x" class="overlay" id="win1"></a>
<div class="popup">
Как пользоваться шаром-предсказаний:
<p>1.В поле для ввода вопроса, вводим интересующий вас вопрос;</p>
<p>2.Нажимает на кнопку "Отправить";</p>
<p>3.Если допустил ошибку можно нажать кнопку "Очистить";</p>
<p>4.Ждем, с нетерпением, ответа.</p>
<a class="close" title="Закрыть" href="#close"></a>
</div>


<div class="shar">	
	<h1 class="line1">
		<?php
		if( isset( $_POST['my_button'] ) )
		{
		

        $host = 'localhost';  // Хост, у нас все локально
        $user = 'worldhp';    // Имя созданного вами пользователя
        $pass = 'markiz98'; // Установленный вами пароль пользователю
        $db_name = 'worldhp';   // Имя базы данных
        $link = mysqli_connect($host, $user, $pass, $db_name); // Соединяемся с базой
        $db_table = 'vopros';
        $nam = $_POST['vopros123'];
  
        if (!$link) 
		{
        echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
		exit;
		}
  
		$tr=$_SESSION['Login'];
		$vp=$_SESSION['ID'];
		
		$today = date("d.m.y");  
		
	
			
			{
			$result3 = mysqli_query($link, "SELECT vopros_p FROM vopros WHERE ID='$vp'");
			$res = array();
			while($row = mysqli_fetch_row($result3))
			$res[] = $row[0];


				if (in_array($nam,$res))
				{
				echo "Ты уже задавал такой вопрос";
				}
				else 
				{
				$sql = mysqli_query($link, 'SELECT answer FROM answers ORDER BY RAND() LIMIT 1');
				while ($result = mysqli_fetch_array($sql)) {
				$otv=$result['answer'];
				echo "$otv";
				}
  
		
				$sql2 = mysqli_query($link, "SELECT ID FROM people WHERE Login='$tr'");
				while ($result2 = mysqli_fetch_array($sql2)) 
				{
				$ov=$result2['ID'];
				
				}
  
				$query = "INSERT INTO `vopros`(`vopros_p`, `day`, `people`) VALUES ('{$nam}', '{$today}', '{$ov}')";
					if(mysqli_query($link, $query))
					{
                
					}
				}	
			}
		}

		
		?>
	</h1>
</div>

			
			<form name="test" method="post">
			<p class="vopros"><b>Ваш Вопрос:</b></p> 
			<p>
			<input name="vopros123" type="text" size="50" placeholder="Вопрос предпологающий ответы да или нет">
			</p>

			<p><input type="submit"  name="my_button" value="Отправить">
			<input type="reset" value="Очистить"></p>
			</form>
	