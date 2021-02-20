<?php
session_start();
?>
<html lang="ru">


<head>

<meta charset="utf-8">

<title> Главная - Волшебный мир Гарри Поттера </title>


<link rel="stylesheet" href="../css/ad_style.css">
</head>
<body>
    
    <div class="admin">
<form action="testreg.php" method="POST">
	
	<p>Ваш логин: </p>
    <input name="Login" type="text" size="30" maxlength="15">
   
 
    <p>Ваш пароль:</p>
    <input name="Password" type="password" size="15" maxlength="15">
    

    <p> <input type="submit" name="submit" value="Войти"> </p>
	
</form>

</div>

</body>
</html>



