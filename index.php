<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <?php
    session_start();
    //echo md5("zaq1@WSX", false);
    //echo password_hash("zaq1@WSX",PASSWORD_DEFAULT);
    if (isset($_SESSION['logged']) && $_SESSION==true) {
      header('Location: zalogowano.php') ;//sprawdzenie sesji
      $connect->close();
      exit();
    }

     ?>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style/style.css">
    <title>Projekt</title>
  </head>
  <body>
    <form action="connect.php" method="post">
      Login: <input type="text" name="login"><br>
      Hasło: <input type="password" name="password"><br>
      <input type="submit" value="Zaloguj się">
    </form>
    <form action="register.php" method="post">
    <input type="submit" value="Zarejestruj się">
  </form>
    <?php
      if (isset($_SESSION['error'])) echo $_SESSION['error'];
      unset($_SESSION['error']);//bledy

     ?>
  </body>
</html>
