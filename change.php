<?php
session_start();
 $connect = @new mysqli("localhost","root","","projekt");
 $login=$_SESSION['user'];
 $haslo1=$_POST['opasswd'];
 $passwd=$_POST['passwd'];
 $rpasswd=$_POST['rpasswd'];
 $correct = true;
 if ($_POST['passwd']!=$_POST['rpasswd']) {
   $correct = false;
   $_SESSION['passwd_d']= "Hasła nie są identyczne";
 }
 if(strlen($_POST['passwd'])<8)
 {
   $correct = false;
   $_SESSION['passwd_d']= "Hasło musi mieć co najmniej 8 znaków";
 }
 $sql="SELECT haslo FROM uzytkownicy WHERE login = '".$login."';";
 if ($result = @$connect->query($sql)) {
        if ($result->num_rows) {
          $rekord = $result->fetch_assoc();
          $haslo=$rekord['haslo'];
        }
      }
      if(password_verify($haslo1,$haslo)){
        if ($passwd == $rpasswd) // sprawdzamy czy hasła takie same
          {
           $passwd = password_hash($_POST['passwd'],PASSWORD_ARGON2ID);
         //  $passwd = password_hash($_POST['passwd'],PASSWORD_DEFAULT);

             mysqli_query($connect,"UPDATE `uzytkownicy` set haslo='".$passwd."' where login = '".$login."';");
           }else echo "nowe hasła nie są takie same";

         }else $_SESSION['passwd_d']= "Błędne hasło";
         echo "udało się yey!";
header('Location: index.php')
?>
