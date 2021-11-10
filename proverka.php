<?php 
	session_start();
	?> 
	<meta charset="utf-8">
	<?php 
if (!empty($_SESSION['login']) or !empty($_SESSION['id'])) {
		 exit("<html><head><meta    http-equiv='Refresh' content='0;    URL=cart\cart.php'></head></html>");
	}
	else{
		exit("<script> alert('Это только для пользователей')</script><html><head><meta    http-equiv='Refresh' content='0;    URL=index.php'></head></html>");
		
	}	
 ?>
