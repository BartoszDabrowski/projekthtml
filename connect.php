<?php
  session_start();
    $connect = @new mysqli("localhost","root","","projekt");//dane do bazy
    $login = $_POST['login'];
    $haslo = $_POST['password'];
    $login= htmlentities($login,ENT_QUOTES,UTF8);
    $haslo= md5($haslo,FALSE); //hash po md5
    //$haslo = password_hash($haslo,PASSWORD_ARGON2ID); uzyj tego
    if ($connect->connect_errno!=0) {
      echo "error ".$connect->connect_error;
    }else {
      $sql= "SELECT * FROM users where name='$login' and pass='$haslo'"; //zapytanie bez porownywania hasla daj
      if ($result = @$connect->query($sql)) {
        
        if ($result->num_rows) {
          $rekord = $result->fetch_assoc();
          //$_SESSION['hash']= to jak sie to miejsce w bazie nazywa xD
          //if(password_verify($haslo,$_SESSION['hash'])){  
          $_SESSION['logged'] = true;
          $_SESSION['user'] = $rekord['name'];
          $_SESSION['id'] = $rekord['id'];
        //}else{
        //    $_SESSION['error'] = "Nieprawidłowy login lub haslo";
        //    header('Location:index.php');  
        //}  jakos tak to bedzie

          // $rekord->close();
          header('Location: zalogowano.php');
        }else {
            $_SESSION['error'] = "Nieprawidłowy login lub haslo";
            header('Location:index.php');
        }
      }

      $connect->close();
    }
 ?>
