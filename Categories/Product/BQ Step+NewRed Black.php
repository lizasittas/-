<?php 
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="..\..\header.css">
	<link rel="stylesheet" type="text/css" href="..\..\reg.css">
	<link rel="stylesheet" type="text/css" href="prod.css">
</head>
<body>
	<div class="perehod"><a href="..\..\index.php">Главная</a>\<a href="..\phone.php">Телефоны и аксессуары</a>\<a href="#">BQ Step+NewRed Black</a></div>
<div id="content">	
	<div class="left">
		<div ><img src="..\images\0.jpeg" class="foto"></div>
	</div>
	<div class="right">
		<p class="name">Мобильный телефон BQ Step+NewRed Black (BQ-1848)</p>
		<br>
		<p class="opti">Бренд: <b class="t">BQ</b></p>
		<p class="opti">Модель: <b class="t">Step+NewRed</b></p>
		<p class="opti">Страна производитель:<b class="t">Китай</b> </p>
		<p class="opti">Гарантия: <b class="t">12мес.</b></p>
		<p class="opti">Веc: <b class="t">0,07кг</b></p>
		<br>
		<form action="..\test.php" method="post">
			<input type="hidden" name="test" value="1">
			<input type="submit" name="submit" value="Добавить в корзину">
			<img src="..\..\images\cart.png">
		</form>
		
		<br><br>
		<p class="nam">ОСНОВНЫЕ ХАРАКТЕРИСТИКИ</p>	
		<hr color="orange">	
		<br>
		<p class="opti">Диагональ экрана: <b class="t">1.77" (160х128)</b></p>
		<p class="opti">Память (RAM/ROM): <b class="t">32Мб / 32Мб</b></p>
		<p class="opti">Экран: <b class="t">1.77" (160х128)</b></p>
		<p class="opti">Кол-во SIM: <b class="t">2 SIM</b></p>
		<p class="opti">Емкость аккумулятора: <b class="t">600мАч</b></p>
		<p class="opti">Цвет: <b class="t">красный / черный</b></p>
		<br><br><br>
		<p class="nam">ОПИСАНИЕ</p>	
		<hr color="orange">	
		<br>
		<p class="opti">
			Если вам нужен простой и удобный телефон для общения, BQ BQM-1848 Step+ идеально вам подойдёт. Он поддерживает две SIM-карты, что даёт возможность подобрать оптимальные тарифные планы мобильных операторов. Встроенный FM-приёмник позволяет прослушивать радиовещательные каналы. Кроме того, с помощью телефона вы также сможете слушать музыку. Устройство поддерживает карты памяти до 32 Гб, что позволит вам сохранить множество музыкальных композиций. Телефон также поддерживает технологию Bluetooth, поэтому вы сможете передавать аудиофайлы без помощи кабеля.
		</p>
		</div>
		
		
		
	</div>
	
</div>


<div id="zatemnenie">
      <div id="okno">
       <div id="box1"  class="test">
                        <form action="..\..\testreg.php" method="post">
                        <p align="center" class="vh">Войти</p>
                        <p class="log">Логин:</p>
                        <p><input type="text" name="login" size="20" class="pole"></p>
                        <p class="log1">Пароль:</p>
                        <p><input type="password" name="password" class="pole"></p>
                        <input type="submit" name="submit" value="Войти" class="button-registr">
                        <button class="reg1"><a href="#" onclick="openbox1('box2'); return false" >Зарегистрироваться</a></button>

                  </form>
                
                  </div>

                   <div id="box2" style="display: none;" class="test">
                        <form action="..\..\save_user.php" method="post">
                        <p align="center" class="vh">Регистрация</p>
                        <p class="log">Логин:</p>
                        <p><input type="text" name="login" size="20" class="pole"></p>
                        <p class="log1">Пароль:</p>
                        <p><input type="password" name="password" class="pole"></p>
                        <input type="submit" name="submit" value="Зарегистрироваться" class="button-registr">
                        <button class="reg1"><a href="#" onclick="openbox1('box1'); return false" >Авторизоваться</a></button>
                  </form>
                  </div> 
                 <a href="#">  <div class="close">x</div></a>
    </div>
     
   </div>


<div id="footer">

  <hr class="qwe">
  <p class="qwe" align="center">Smart © 2020-2021. Powered by ITCOM</p>
</div>

<div id="header">
      <a href="..\..\index.php"><img src="..\..\Images\logo1.png" class="logo"></a>
       <a href="..\..\index.php" class="glav"><p >Главная</p></a>     
      <a href="..\..\index.php" class="magazin"><p>Магазин</p></a> 
      <a href="..\..\index.php" class="onass"><p>О нас</p></a>
      
<div class="cart">
  <a href='..\..\Cart\cart.php'><img src='..\..\images\cart.png'></a>
</div>
<div id="cabinet"><img src="..\..\Images\Cabinet.png" class="Lcab"><div  >
  <?php 
  if (empty($_SESSION['login']) or empty($_SESSION['id']))
  {
    echo '<button><a href="#zatemnenie">Войти</a>
    </button>';
  }
  else 
  {
    echo '<button><a href="..\vihod.php">Выйти</a></button>';
  } 
  ?>
</div></div>
<p class="smen"> | 
  <?php 
  if (empty($_SESSION['login']) or empty($_SESSION['id']))
  {
    echo "Гость";
  }
  else 
  {
    echo $_SESSION['login'];
  } 
  ?>
</p>    
</div>


<script type="text/javascript">
   function openbox1(id) {
  var all = document.querySelectorAll(".test");
  for (var i = 0; i < all.length; i++) {
    if (all[i].id == id) {
       all[i].style.display = 'block';
    } else {
      all[i].style.display = 'none';
    }
  }
}
 </script>
</body>
</html>