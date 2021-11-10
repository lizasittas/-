<?php 
  session_start();
  include("bd.php");

 ?>
<!DOCTYPE html>
<html>
<head>
      <title>Круто</title>
      <meta charset="utf-8">
      <link rel="stylesheet" type="text/css" href="123.css">
      <link rel="stylesheet" type="text/css" href="slider.css">
      <link rel="stylesheet" type="text/css" href="reg.css">
      <link rel="stylesheet" type="text/css" href="registr.css">
     <link rel="stylesheet" type="text/css" href="header.css">
</head>
<body>

<div id="main">
            
            
           
      <div id="content"> 
            <div class="first">
                 
               
                  <div class="sim-slider">
  <ul class="sim-slider-list">
    <li><img class="img" src="images\slide2.jpg" alt="screen"></li> <!-- это экран -->
    <li class="sim-slider-element"><img class="img" src="images\slide1.jpg" alt="0"></li>
    <li class="sim-slider-element"><img class="img" src="images\slide2.jpg" alt="1"></li>
  </ul>
  <div class="sim-slider-arrow-left"></div>
  <div class="sim-slider-arrow-right"></div>
  <div class="sim-slider-dots"></div>
</div>
                   
                  
            </div>
            <div id="shop1"></div>
            <div id="shop">
                  <div class="categories">
                    <h3 align="center">Категории</h3>
                 <a href="#" onclick="openbox('box1'); return false" class="categor" id="act">Телефоны и аксесуары</a>
                  
                  <a href="#" onclick="openbox('box2'); return false" class="categor" id="act">Планшеты и аксессуары</a>
                 
                  <a href="#" onclick="openbox('box3'); return false" class="categor" id="act">Ноутбуки и аксессуары</a>

                  </div>

                  <div class="shopzone" id="box1" >
                      <a href="categories\phone.php">  <div class="card">
                              <div ><img src="images\phone.png" class="foto"></div>
                              <div class="text">Телефоны</div>
                              
                        </div></a>
                        <a href="#"> 
                        <div class="card">
                              <div ><img src="images\Smartphone.png" class="foto"></div>
                              <div class="text">Смартфоны</div>
                              
                        </div></a>  
                         <div class="card">
                              <div ><img src="images\Case.png" class="foto"></div>
                              <div class="text">Чехлы</div>
                              
                        </div>
                         <div class="card">
                              <div ><img src="images\glass.png" class="foto"></div>
                              <div class="text">Стекла</div>
                              
                        
                        </div>
                  </div>

                  <div class="shopzone" id="box2"  style="display: none;">
                        <a href="#">  <div class="card">
                              <div ><img src="images\10.jpeg" class="foto"></div>
                              <div class="text">Планшеты</div>
                              
                        </div></a>

                        <a href="#">  <div class="card">
                              <div ><img src="images\11.jpeg" class="foto"></div>
                              <div class="text">Электронные книги</div>
                              
                        </div></a>

                        <a href="#">  <div class="card">
                              <div ><img src="images\12.jpeg" class="foto"></div>
                              <div class="text">Графические планшеты</div>
                              
                        </div></a>

                        <a href="#">  <div class="card">
                              <div ><img src="images\13.jpeg" class="foto"></div>
                              <div class="text">Чехлы для планшетов</div>
                              
                        </div></a>


                  </div>



                  <div class="shopzone" id="box3"  style="display: none;">
                         <a href="#">  <div class="card">
                              <div ><img src="images\14.jpeg" class="foto"></div>
                              <div class="text">Ноутбуки</div>
                              
                        </div></a>

                        <a href="#">  <div class="card">
                              <div ><img src="images\15.jpeg" class="foto"></div>
                              <div class="text">Сумки для ноутбуков</div>
                              
                        </div></a>
                        
                  </div>


              
            </div>
            <div id="onas"></div>
            <div class="onas">
                  <div class="onastext">
                        <p>Компания "Smart" основана в 2020 году. На сегодняшний день зарекомендовала себя как надежный и профессиональный партнер своих клиентов.</p>
                        <br>
                        <h3>Основные направления работы фирмы:</h3>
                        <br>
                        <ul>
                          <li>розничная сеть магазинов электроники;</li>
                          <li>сервис и качественная поддержка;</li>
                          <li>работа с оптовым и корпоративным сектором.</li>
                        </ul>
                        <br>
                        <p>В магазинах компании предоставлен широкий ассортимент продукции ведущих мировых брендов: компьютерной и мобильной техники, печатного и копировального оборудования, периферии и аксессуаров, электрического и сетевого оборудования, телекоммуникационных систем, а также всех необходимых комплектующих и расходных материалов.</p>
                        <p>Компания "Smart" — успешный, динамично развивающийся проект на рынке компьютерной техники Донецкой Народной Республики.</p>
                        <br>
                        <hr color="orange" size="3px">
                        <br>
                        <h3>Преимущества:</h3>
                        <br>
                        <ul>
                          <li>Высокое качество продукции;</li>
                          <li>Большой ассортимент товаров различных брендов;</li>
                          <li>Квалифицированный и опытный персонал;</li>
                          <li>Доступные цены;</li>
                          <li>Выгодные предложения;</li>
                          <li>Устойчивые связи с поставщиками.</li>
                        </ul>
                  </div>
            </div>
      </div>


<div id="zatemnenie">
      <div id="okno">
       <div id="box1"  class="test">
                        <form action="testreg.php" method="post">
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
                        <form action="save_user.php" method="post">
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
      <a href="index.php"><img src="Images\logo1.png" class="logo"></a>
       <a href="index.php" class="glav"><p >Главная</p></a>     
      <a href="#shop1" class="magazin"><p>Магазин</p></a> 
      <a href="#onas" class="onass"><p>О нас</p></a>
      
<div class="cart">
  <a href='Cart\cart.php'><img src='images\cart.png'></a>
</div>
<div id="cabinet"><img src="Images\Cabinet.png" class="Lcab"><div  >
  <?php 
  if (empty($_SESSION['login']) or empty($_SESSION['id']))
  {
    echo '<button><a href="#zatemnenie">Войти</a>
    </button>';
  }
  else 
  {
    echo '<button><a href="vihod.php">Выйти</a></button>';
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

<script src="test.js"></script>
<script src="slider.js"></script>
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
