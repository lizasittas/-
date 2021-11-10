<meta charset="utf-8">
<?php
	
	
	if(isset($_POST['login'])){$login=$_POST['login']; if ($login == ''){unset($login);}}
	if(isset($_POST['password'])){$password=$_POST['password']; if ($password == ''){unset($password);}}
	if(empty($login) or empty($password))
	{
		exit("<script> alert('Вы ввели не всю информацию, проверьте все ли введенно')</script><html><head><meta    http-equiv='Refresh' content='0;    URL=index.php'></head></html>");
	}
	$login = stripslashes($login);
	$login = htmlspecialchars($login);
	$password = stripcslashes($password);
	$password = htmlspecialchars($password);

	$login = trim($login);
	$password = trim($password);

	include ("bd.php");

	$result = mysqli_query( $db, "SELECT id from users where login='$login'");
	$myrow = mysqli_fetch_array($result);
	if(!empty($myrow['id'])){
		exit("<script> alert('Такой логин уже есть')</script> <html><head><meta    http-equiv='Refresh' content='0;    URL=index.php'></head></html>" );
		
	}
	$result2 = mysqli_query($db, "INSERT INTO `users` (`login`, `password`) VALUES ('$login', '$password')");

	if($result2 == true){
		echo "<script> alert('Вы успешно зарегестрировались')</script> <html><head><meta    http-equiv='Refresh' content='0;    URL=index.php'></head></html>";
	}
	else{
		echo "<script> alert('Ошибка вы не зарегистрированы')</script><html><head><meta    http-equiv='Refresh' content='0;    URL=index.php'></head></html>";
	}
	?>
	


