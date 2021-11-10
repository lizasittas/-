<?php 
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="corz.css">
<link rel="stylesheet" type="text/css" href="../header.css">
</head>
<body>
<?php
include("bd.php");
include("test.php");

     

$query = "SELECT * FROM shopingcart WHERE id_client = '$client'";
 
$result = mysqli_query($db, $query) or die("<script> alert('Это только для пользователей')</script><html><head><meta    http-equiv='Refresh' content='0;    URL= '..\index.php'></head></html>" . mysqli_error($link)); 
if($result)
{
    $rows = mysqli_num_rows($result); // количество полученных строк
     
    echo "<div class='shopping-cart'>
      <!-- Title -->
      <div class='title'>
        Корзина $b

      </div>
 ";
    for ($i = 0 ; $i < $rows ; ++$i)
    {
    	
        $row = mysqli_fetch_row($result);
        $row[5] = $row[5] * $row[6];
        echo "
<div class='item'>
        <div class='buttons'>
          <span class='delete-btn'><form action='delete.php' method= 'post'> 
            <input type='hidden' name='test1' value='$row[2]'>
                  <input type='submit' name='submit' value='x'></form></span>
        </div>
 
        <div class='image'>
          <img src='$row[7]' alt='/'' class='img'>
        </div>
 
        <div class='description'>
          <span>$row[4]</span>
          <span>$row[3]</span>
        </div>

        <div class='quantity'>

<table>
<tr>
<td>
 <form action='min.php' method='post' >
        <input type='hidden' name='test1' value='$row[2]'>
                  <input type='submit' name='submit' value='-'>
        </form>       
</td>
          <td>
          <input type='text' name='name' value='$row[6]' '>
          </td>
         
          <td>


 <form action='kol.php' method='post'>
        <input type='hidden' name='test1' value='$row[2]'>
                  <input type='submit' name='submit' value='+'>
        </form>

          
</td>
        </tr>
        </table>
        </div>
 
        <div class='total-price'>$row[5] руб.</div>
      </div>
        ";
           
        
    }
    echo "</div>";
     
    // очищаем результат
    mysqli_free_result($result);
}
 
 $a = mysqli_query($db, "SELECT SUM(Kol) FROM shopingcart WHERE
 id_client = $client"); 
 $b = mysqli_fetch_array( $a ); 
 
mysqli_close($db);
?>
<div id="header">
      <a href="..\index.php"><img src="..\Images\logo1.png" class="logo"></a>
       <a href="..\index.php" class="glav"><p >Главная</p></a>     
      <a href="..\index.php" class="magazin"><p>Магазин</p></a> 
      <a href="..\index.php" class="onass"><p>О нас</p></a>
      
<div class="cart">
  <a href='Cart\cart.php'><img src='..\images\cart.png'></a>
</div>
<div id="cabinet"><img src="..\Images\Cabinet.png" class="Lcab"><div  >
  <?php 
  if (empty($_SESSION['login']) or empty($_SESSION['id']))
  {
    echo '<button><a href="#zatemnenie">Войти</a>
    </button>';
  }
  else 
  {
    echo '<button><a href="..\vihod.php">Выйти</a></button>';
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
</body>
</html>