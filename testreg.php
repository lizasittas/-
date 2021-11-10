<?php
	session_start(); ?>
	<meta charset="utf-8">
	<?php
	if(isset($_POST['login'])){$login=$_POST['login']; if ($login == ''){unset($login);}}
	if(isset($_POST['password'])){$password=$_POST['password']; if ($password == ''){unset($password);}}
	if(empty($login) or empty($password))
	{
		exit("<script> alert('Вы ввели не всю информацию, проверьте все ли введенно')</script><html><head><meta    http-equiv='Refresh' content='0;    URL=index.php'></head></html>");	}
	$login = stripslashes($login);
	$login = htmlspecialchars($login);
	$password = stripcslashes($password);
	$password = htmlspecialchars($password);
	$login = trim($login);
	$password = trim($password);
	include ("bd.php");
	$result = mysqli_query($db,"SELECT * from users where login='$login'");
	$myrow = mysqli_fetch_array($result);
	if(empty($myrow['password'])){	
		exit("<script> alert('Извините пользователь с таким логином не существует')</script><html><head><meta    http-equiv='Refresh' content='0;    URL=index.php'></head></html>");	}
	else{
		if($myrow['password'] == $password){
			$_SESSION['login'] = $myrow['login'];
			$_SESSION['id'] = $myrow['id'];
			exit("<html><head><meta    http-equiv='Refresh' content='0;    URL=index.php'></head></html>");		}
		else{
			exit("<script> alert('Извините введенные вами логин или пароль неверны')</script><html><head><meta    http-equiv='Refresh' content='0;    URL=index.php'></head></html>");		}	}
	?>
