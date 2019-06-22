<?php
  session_start();
    $connect = @new mysqli("localhost","root","","projekt");//dane do bazy
    $login = $_POST['login'];
    $haslo = $_POST['password'];
    $login= htmlentities($login,ENT_QUOTES,UTF8);
    $haslo= md5($haslo,FALSE); //hash po md5
    if ($connect->connect_errno!=0) {
      echo "error ".$connect->connect_error;
    }else {
      $sql= "SELECT * FROM users where name='$login' and pass='$haslo'"; //zapytanie
      //if($result = @$connect->query(sprintf("SELECT * FROM users where name='%s' and pass='%s'",
      //mysqli_real_escape_string($connect,$login),mysqli_real_escape_string($connect,$login)))){
      if ($result = @$connect->query($sql)) {
        // code...

        if ($result->num_rows) {
          $rekord = $result->fetch_assoc();
          $_SESSION['logged'] = true;
          $_SESSION['user'] = $rekord['name'];
          $_SESSION['id'] = $rekord['id'];


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
