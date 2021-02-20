<?php session_start(); ?>

<!DOCTYPE HTML>
<html lang="ru">


<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title> <?php include './docs/title.php'; ?>- Волшебный мир Гарри Поттера </title>


<link rel="stylesheet" href="./css/style1.css">
<link rel="stylesheet" href="./css/style.css">
<link rel="stylesheet" href="./css/st.css">
<link rel="stylesheet" href="./css/style_m.css">


<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

<style>img[alt="www.000webhost.com"]{display:none;}</style>
</head>







<body>
<div class="w">


	 

<?php
    // Проверяем, пусты ли переменные логина и id пользователя
    if (empty($_SESSION['Login']) or empty($_SESSION['ID']))
    {
    // Если пусты, то мы не выводим ссылку
   echo '<a  href="index.php?page=0"  class="d1">Регистрация</a>';
   echo '  <a  href="reg/vhod.php"  class="d1">Вход</a>';
    }
    else
    {

    // Если не пусты, то мы выводим ссылку
    echo "Вы вошли на сайт, как ".$_SESSION['Name'];
	echo ' <a  href="reg/exit.php"  class="d1">Выход</a>';
        echo '<p> <a  href="index.php?page=9"  class="d1">Шар-пророчества</a> </p>';

	$_SESSION['access'] = TRUE;
    }
?>
</div>
   

<div class="wrapper">
<div class="nav" id="main-nav">
       <div id="sub-navs">
         <button class="sub-btn" onclick="gl()">Главная</button>
		 

         <button class="sub-btn" onclick="BlogGood()">Мальчик который выжил</button>
         
		 
         <button class="sub-btn" onclick="Blog()">С чего все началось</button>
         <button class="sub-btn" onclick="Good()">Хогвартс</button>
		 
		 <button class="sub-btn" onclick="BG()">Книги. Фильмы. Отличия</button>
         <button class="sub-btn" onclick="BlGo()">Актеры</button>
		 
		 
		 
		 
       
         <button class="sub-btn" onclick="BloGoo()">Немного о волшебстве</button>
         <button class="sub-btn" onclick="BGood()">Об авторе</button>
         <button class="sub-btn" onclick="BlGood()">Уникальная возможность</button>
          
         
	
       </div>
       <button id="main-btn" >Открой меня</button>
  </div>
</div>




  <script src="js/jquery.min.js"></script>

    <script src="js/menu.js"></script>



<div onclick="show('none')" id="wrap"></div>

					<!-- Само окно-->
			<div id="window">
						
				<img class="close" onclick="show('none')" src="images/123.png" alt="Иллюстрация">
					
				<img  style="margin: 20px 0 0 50px;" src="images/118.jpg"  alt="Иллюстрация">

               <p>Поздравляю! Вы попали на факультет Слизерин!</p>				
			</div>
			
			
			
			<div id="wi">
			<img class="close" onclick="show1('none')" src="images/123.png" alt="Иллюстрация">
			<img  style="margin: 20px 0 0 50px;" src="images/12345.png"  alt="Иллюстрация">
             <p>Поздравляю! Вы попали на факультет Пуффендуй!</p>
			 </div>

			 
			 
			<div id="win">
			<img class="close" onclick="show2('none')" src="images/123.png" alt="Иллюстрация">
			<img  style="margin: 20px 0 0 50px;" src="images/123456.png"  alt="Иллюстрация">
             <p>Поздравляю! Вы попали на факультет Когтевран!</p>
			 </div>
			 
			 
			 
			 <div id="wndo">
			 <img class="close" onclick="show3('none')" src="images/123.png" alt="Иллюстрация">
			 <img  style="margin: 20px 0 0 50px;" src="images/1234.png"  alt="Иллюстрация">
             <p>Поздравляю! Вы попали на факультет Грифиндор!</p>
			 </div>

 

	<div id="head">
	 

	<img src="images/3.png"  alt="Заголовок">
	
	</div>
	
	
	<div id="head1">
	
	<img src="images/7.png"  alt="Заголовок">
	
	</div>
  
  
  	
 
  
  
  

			<div class="menu_mob">
				<header class="header">
				<div class="hamburger">
					<button class="button hamburger__button js-menu__toggle">
					<span class="hamburger__label">Open menu</span>
					</button>
				</div>
				
				<nav class="menu">
					<ul class="list menu__list">
					<li class="menu__group">
					<a href="index.php" class="link menu__link">Главная</a>
					</li>
					<li class="menu__group">
					<a href="index.php?page=1" class="link menu__link">Мальчик который выжил</a>
					</li>
					<li class="menu__group">
					<a href="index.php?page=2" class="link menu__link">С чего все началось</a>
					</li>
					<li class="menu__group">
					<a href="index.php?page=3" class="link menu__link">Хогвартс</a>
					</li>
					<li class="menu__group">
					<a href="index.php?page=4" class="link menu__link">Книги. Фильмы. Отличия</a>
					</li>
					<li class="menu__group">
					<a href="index.php?page=5" class="link menu__link">Актеры</a>
					</li>
					<li class="menu__group">
					<a href="index.php?page=6" class="link menu__link">Немного о волшебстве</a>
					</li>
					<li class="menu__group">
					<a href="index.php?page=7" class="link menu__link">Об авторе</a>
					</li>
					<li class="menu__group">
					<a href="index.php?page=8" class="link menu__link">Уникальная возможность</a>
					</li>
					<li class="menu__group">
					<a href="index.php?page=12" class="link menu__link">Шар-пророчества</a>
					</li>
					</ul>
				</nav>
				</header>
				<script  src="js/index.js"></script>

    
			</div>


			<div id="content">
			    
			    
			
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>				
			
<?php

if (isset($_GET['page'])) { $page=$_GET['page']; }

if (isset($page)) 
  {
   switch ($page)
    {case '1': include './docs/1.php' ;break;
     case '2': include './docs/2.php' ;break;
     case '3': include './docs/3.php' ;break;
     case '4': include './docs/4.php' ;break;
     case '5': include './docs/5.php' ;break;
     case '6': include './docs/6.php' ;break;
     case '7': include './docs/7.php' ;break;
     case '8': include './docs/8.php' ;break;
     case '9': include './docs/shar.php' ;break;
     case '0': include './docs/reg.php' ;break;
     case '11': include './docs/save_user.php' ;break;
     case '12': include './docs/stop.php' ;break;
     case '13': include './docs/vhod.php' ;break;
     case '14': include './docs/testreg.php' ;break;
     case '15': include './docs/exit.php' ;break;
     case '16': include './docs/book.php' ;break;
	 case '17': include './docs/films.php' ;break;
	 case '18': include './docs/camen.php' ;break;
     case '19': include './docs/mantia.php' ;break;
	 case '20': include './docs/palka.php' ;break;
	 
     case 'e1': include './docs/001.php' ;break;     
     default:  include './docs/404.php'  ; break;
    }
  }
else
   include './docs/gl.php'   ;
?>
		
		    </div>


			
  
			<div id="footer"> Шапоренко А.Г., ПС-61 <img src="/cnt/counter.php?cat=worldhp&amp;color=10&amp;id=eba1d05be1d7b301f2b1353455b13162" alt="IT Counter" /> </div>

</body>


</html>
