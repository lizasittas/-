<?php 
session_start();
 ?>
 <?php 
 include("bd.php");
 $a = mysqli_query($db, "SELECT SUM(Kol) FROM shopingcart WHERE
 id_client = $client"); 
 $b = mysqli_fetch_array( $a ); 
  ?>