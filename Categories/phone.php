<?php 
  session_start();
  include("bd.php");

 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	
	<link rel="stylesheet" type="text/css" href="..\reg.css">
	<link rel="stylesheet" type="text/css" href="..\registr.css">
	<link rel="stylesheet" type="text/css" href="products.css">
  <link rel="stylesheet" type="text/css" href="..\header.css">
</head>
<body>
<div class="perehod"><a href="..\index.php">Главная</a>\<a href="#">Телефоны и аксессуары</a></div>
<div id="product">

<div class="case">
  <a href="product\BQ Step+NewRed Black.php">
		<div class="foto"><img src="Images\0.jpeg" class="fot"></div>
  </a>  
		<div class="nal"></div>
		<div class="text"><p align="center">Мобильный телефон BQ Step+NewRed Black (BQ-1848)</p></div>
		<div class="price">690 руб.</div>

	</div>

	<a href=""><div class="case">
		<div class="foto"><img src="Images\1.jpeg" class="fot"></div></a>
		<div class="nal"></div>
		<div class="text"><p align="center">Мобильный телефон INOI 100 Black (без з/у)</p></div>
		<div class="price">690 руб.</div>
	</div>

	<a href=""><div class="case">
		<div class="foto"><img src="Images\2.jpeg" class="fot"></div></a>
		<div class="nal"></div>
		<div class="text"><p align="center">Мобильный телефон INOI 239 Dark Red (без з/у)</p></div>
		<div class="price">790 руб.</div>
	</div>

	<a href=""><div class="case">
		<div class="foto"><img src="Images\3.jpeg" class="fot"></div></a>
		<div class="nal"></div>
		<div class="text"><p align="center">Мобильный телефон INOI 101 Black</p></div>
		<div class="price">890 руб.</div>
	</div>

	<a href=""><div class="case">
		<div class="foto"><img src="Images\4.jpeg" class="fot"></div></a>
		<div class="nal"></div>
		<div class="text"><p align="center">Мобильный телефон Nokia 105 SS TA-1203 (16KIGB01A13)</p></div>
		<div class="price">1190 руб.</div>
	</div>

	
</div>
<div id="zatemnenie">
      <div id="okno">
       <div id="box1"  class="test">
                        <form action="..\testreg.php" method="post">
                        <p align="center" class="vh">Войти</p>
                        <p class="log">Логин:</p>
                        <p><input type="text" name="login" size="20" class="pole"></p>
                        <p class="log1">Пароль:</p>
                        <p><input type="password" name="password" class="pole"></p>
                        <input type="submit" name="submit" value="Войти" class="button-registr">
                        <button><a href="#" onclick="openbox1('box2'); return false">Зарегистрироваться</a></button>

                  </form>
                
                  </div>

                   <div id="box2" style="display: none;" class="test">
                        <form action="..\save_user.php" method="post">
                        <p align="center" class="vh">Регистрация</p>
                        <p class="log">Логин:</p>
                        <p><input type="text" name="login" size="20" class="pole"></p>
                        <p class="log1">Пароль:</p>
                        <p><input type="password" name="password" class="pole"></p>
                        <input type="submit" name="submit" value="Зарегистрироваться" class="button-registr">
                        <button><a href="#" onclick="openbox1('box1'); return false">Авторизоваться</a></button>
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
      <a href="..\index.php"><img src="..\Images\logo1.png" class="logo"></a>
       <a href="..\index.php" class="glav"><p >Главная</p></a>     
      <a href="..\index.php" class="magazin"><p>Магазин</p></a> 
      <a href="..\index.php" class="onass"><p>О нас</p></a>
      
<div class="cart">
  <a href='..\Cart\cart.php'><img src='..\images\cart.png'></a>
</div>
<div id="cabinet"><img src="..\Images\Cabinet.png" class="Lcab"><div  >
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