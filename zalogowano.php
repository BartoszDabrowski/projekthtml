<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <!-- strona dla uzytkownika po zalogowaniu -->
    <?php session_start();
      if (!isset($_SESSION['logged'])) {
        header('Location: index.php');
        exit;
      }
     ?>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style/style.css">
    <title></title>
  </head>
  <body>
    <?php

    echo $_SESSION['user']." <a href='logout.php'>Wyloguj</a>";
     ?>

  </body>

</html>
