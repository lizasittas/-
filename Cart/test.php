<?php 
session_start();
 ?>
<meta charset="utf-8">
<?php 

include("bd.php");



if (!empty($_SESSION['login']) or !empty($_SESSION['id'])) {
	$client = $_SESSION['id'];
}
else{
	unset($client);
	exit ("<script> alert('Это только для пользователей')</script><html><head><meta    http-equiv='Refresh' content='0;    URL=index.php'></head></html>");
}

if (isset($_POST['test'])) { $test = $_POST['test']; if ($test == '') { unset($test);} } 

$result = mysqli_query($db, "SELECT * FROM products WHERE
	kod = $test ");


$result1 = mysqli_fetch_array($result);
	

$kod = $result1[0];
$model = $result1[1];
$firm = $result1[2];
$price = $result1[3];
$foto = $result1[4];

$kol =  mysqli_query($db, "SELECT kol FROM `shopingcart` WHERE
	kod_product = $test  and id_client = $client"  );

$result4 = mysqli_query($db, "DELETE FROM `shopingcart` WHERE
	kod_product = $test  and id_client = $client");
$t = 1;


	$result3 = mysqli_query($db, "INSERT INTO `shopingcart` (`id_client`, `kod_product`,`model`, `firm`, `price`, `kol`, `foto`) VALUES ('$client', '$kod', '$model', '$firm', '$price', '$t', '$foto')");






	  
	



  // выведет число строк



if($result3 == true){
        echo "<html><head><meta    http-equiv='Refresh' content='0;    URL=index.php'></head></html>";
    }
    else{
       
    }
 ?>