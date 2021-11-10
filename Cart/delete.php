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
}

if (isset($_POST['test1'])) { $test1 = $_POST['test1']; if ($test1 == '') { unset($test1);} } 
$result4 = mysqli_query($db, "DELETE FROM `shopingcart` WHERE
	kod_product = $test1  and id_client = $client"  );
if($result4 == true){
        echo " <html><head><meta    http-equiv='Refresh' content='0;    URL=cart.php'></head></html>";
    }
?>