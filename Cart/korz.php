<?php 
session_start();
 ?>
 <?php 
 include("bd.php");

 $a1 = mysqli_query($db, "SELECT SUM(price) FROM shopingcart WHERE
 id_client = $client"); 
 $b1 = mysqli_fetch_array( $a1 );

 $a = mysqli_query($db, "SELECT SUM(Kol) FROM shopingcart WHERE
 id_client = $client"); 
 $b = mysqli_fetch_array( $a ); 
  ?>