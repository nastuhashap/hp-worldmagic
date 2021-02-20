<?php session_start(); ?>


<html lang="ru">


<head>

<meta charset="utf-8">

<title> Главная - Волшебный мир Гарри Поттера </title>


<link rel="stylesheet" href="../css/ad_style.css">
</head>
<body>
    <div class="admin">

<?php


if (isset($_POST['Login'])) { $login = $_POST['Login']; if ($login == '') { unset($login);} } //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
    if (isset($_POST['Password'])) { $password=$_POST['Password']; if ($password =='') { unset($password);} }
    //заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную
if (empty($login) or empty($password)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
    {
    exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
    }
    //если логин и пароль введены,то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
    $login = stripslashes($login);
    $login = htmlspecialchars($login);
$password = stripslashes($password);
    $password = htmlspecialchars($password);
//удаляем лишние пробелы
    $login = trim($login);
    $password = trim($password);
// подключаемся к базе
    include ("bd.php");// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь 
 
$result = mysqli_query($db, "SELECT * FROM people WHERE Login='$login'"); //извлекаем из базы все данные о пользователе с введенным логином
    $myrow = mysqli_fetch_array($result);
    if (empty($myrow['Password']))
    {
    //если пользователя с введенным логином не существует
    exit ("Извините, введённый вами login или пароль неверный.");
    }
    else {
    //если существует, то сверяем пароли
    if ($myrow['Password']==$password) {
    //если пароли совпадают, то запускаем пользователю сессию! Можете его поздравить, он вошел!
    $_SESSION['Login']=$myrow['Login']; 
    $_SESSION['Name']=$myrow['Name']; 
    $_SESSION['ID']=$myrow['ID'];
    //эти данные очень часто используются, вот их и будет "носить с собой" вошедший пользователь
    echo "Вы успешно вошли на сайт!" . "<a href='../index.php'>Главная страница</a>";
	$_SESSION['access'] = TRUE;
	//echo '<script>location.replace("index.php");</script>'; exit;
    }
 else {
    //если пароли не сошлись

    exit ("Извините, введённый вами login или пароль неверный. <a href='index.php?page=13'>Главная страница</a>");
    }
    }
    ?>
    
    </div>
</form>
</body>
</html>