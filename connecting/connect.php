<?php
  session_start();
    $connect = @new mysqli("localhost","root","","projekt");//dane do bazy
    $login = $_POST['login'];
    $haslo = $_POST['password'];
    @$login= htmlentities($login,ENT_QUOTES,UTF8);
    if ($connect->connect_errno!=0) {
      echo "error ".$connect->connect_error;
    }else {
      $sql= "SELECT * FROM uzytkownicy where login='$login'"; //zapytanie bez porownywania hasla daj
      if ($result = @$connect->query($sql)) {
        if ($result->num_rows) {
          $rekord = $result->fetch_assoc();
          $_SESSION['hash']=$rekord['haslo'];
        if(password_verify($haslo,$_SESSION['hash'])){
          $_SESSION['logged'] = true;
          $_SESSION['user'] = $rekord['login'];
          $_SESSION['id'] = $rekord['id'];
        }else{
            $_SESSION['error'] = "Nieprawidłowy login lub haslo";
            header('Location:../index.php');
        }

           //$rekord->close();
          header('Location: ../index.php');
        }else {
            $_SESSION['error'] = "Nieprawidłowy login lub haslo";
            header('Location:../index.php');

        }
      }

      $connect->close();
    }
 ?>
