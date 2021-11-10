<?php
$server = "localhost";
$login1 = "root";
$password1 = "root";
$name_db = "user";
      $db = mysqli_connect($server, $login1, $password1, $name_db);
      if ($db == false) {
            echo "ошибка входа";    }
      ?>