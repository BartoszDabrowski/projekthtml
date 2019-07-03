<?php
session_start();
$connect = @new mysqli("localhost","root","","projekt");
$sql= "SELECT * FROM products where id=5";
if ($result = @$connect->query($sql)) {
       if ($result->num_rows) {
         $rekord = $result->fetch_assoc();
         $_SESSION['cena']=$rekord['cena'];
       }
     }
$_SESSION['cart']-=$_SESSION['cena'];
$_SESSION['item5']-=1;
if($_SESSION['item5']==0)
{
  unset($_SESSION['item5']);
}
header('Location: ../cartshow.php')
?>
