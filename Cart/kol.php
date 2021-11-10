<?php 
session_start();
 ?>
 <meta charset="utf-8">
 <?php 
 include("bd.php");
include("test.php");

if (isset($_POST['test1'])) { $test1 = $_POST['test1']; if ($test1 == '') { unset($test1);} } 

$a1 = mysqli_query($db, "UPDATE shopingcart SET Kol = Kol+1 WHERE id_client = $client and kod_product = $test1");

if($a1 == true){
        echo "<html><head><meta    http-equiv='Refresh' content='0;    URL=cart.php'></head></html>";
    }
    else{
       
    }
  ?>