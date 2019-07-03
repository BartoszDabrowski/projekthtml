<?php
session_start();
 $connect = @new mysqli("localhost","root","","projekt");
 $ilosc=$_POST['9lorem'];
 $sql= "SELECT * FROM products where id=9";
 if ($result = @$connect->query($sql)) {
        if ($result->num_rows) {
          $rekord = $result->fetch_assoc();
          $_SESSION['cena']=$rekord['cena'];
        }
      }
      $_SESSION['cart']+=$_SESSION['cena']*$ilosc;
      $_SESSION['item9']+=$ilosc;
      header('Location: ../index.php');
?>
