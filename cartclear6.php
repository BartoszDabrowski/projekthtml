<?php
session_start();
$connect = @new mysqli("localhost","root","","projekt");
$sql= "SELECT * FROM products where id=6";
if ($result = @$connect->query($sql)) {
       if ($result->num_rows) {
         $rekord = $result->fetch_assoc();
         $_SESSION['cena']=$rekord['cena'];
       }
     }
$_SESSION['cart']-=$_SESSION['cena'];
$_SESSION['item6']-=1;
if($_SESSION['item6']==0)
{
  unset($_SESSION['item6']);
}
header('Location: cartshow.php')
?>
