<?php
if (! isset($_SESSION['access']))
{
  echo ' <a href="index.php?page=0">Для продолжения нужно зарегистрироваться</a>....';
  echo ' <a  href="reg/vhod.php"  class="d1"> Уже зарегистрированы? </a>';
  
  exit(0);
}
else{
unset($_SESSION['access']);
echo '<script>location.replace("index.php?page=9");</script>'; exit;
 
}

?>  

		
       