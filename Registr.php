
<!DOCTYPE html>
<html>
<head>
	<title>Регистрация</title>
</head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="registr.css">
<body>
<div class="reg">




       <div id="box1"  class="test">
                        <form action="testreg.php" method="post">
                        <p align="center" class="vh">Вход</p>
                        <p class="log">Логин:</p>
                        <p><input type="text" name="login" size="20" class="pole"></p>
                        <p class="log1">Пароль:</p>
                        <p><input type="password" name="password" class="pole"></p>
                        <input type="submit" name="submit" value="Войти" class="button-registr">
                        <button><a href="#" onclick="openbox('box2'); return false">Зарегистрироваться</a></button>

                  </form>
                  </div>


                  <div id="box2" style="display: none;" class="test">
                        <form action="save_user.php" method="post">
                        <p align="center" class="vh">Регистрация</p>
                        <p class="log">Логин:</p>
                        <p><input type="text" name="login" size="20" class="pole"></p>
                        <p class="log1">Пароль:</p>
                        <p><input type="password" name="password" class="pole"></p>
                        <input type="submit" name="submit" value="Войти" class="button-registr">
                        <button><a href="#" onclick="openbox('box1'); return false">Авторизоваться</a></button>
                  </form>
                  </div>
                  </div>
                   <script type="text/javascript">
                         function openbox(id) {
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