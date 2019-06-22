<!DOCTYPE html>
<?php
session_start();
  if (isset($_POST['login'])) {
    $correct = true;
    if (strlen($_POST['login'])<6 || strlen($_POST['login'])>20) {
      $correct = false;
      $_SESSION['login_e']= "Login musi mieć od 6 do 20 znaków";
    }
    if (!ctype_alnum($_POST['login'])) {
      $_SESSION['login_e']= "Login musi się składać ze znaków alfanumerycznych";
      $correct = false;
    }
    if ($_POST['passwd']!=$_POST['rpasswd']) {
      $correct = false;
      $_SESSION['passwd_e']= "Hasła nie są identyczne";
    }
    if(strlen($_POST['passwd'])<8)
    {
      $correct = false;
      $_SESSION['passwd_e']= "Hasło musi mieć co najmniej 8 znaków";
    }
    if (!isset($_POST['reg'])) {
      $correct = false;
      $_SESSION['reg_e']= "Regulamin nie został zaakceptowany";
    }
    if ($correct) {
      // $passwd = password_hash($_SESSION['passwd'],PASSWORD_DEFAULT);
      $passwd = md5($passwd,FALSE);
      //brakuje inserta
    }
  }

 ?>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style/style.css">
    <title></title>
  </head>
  <body>
    <form  method="post">
      <label>Login:<br> <input type="text" name="login"></label>
      <?php
        if (isset($_SESSION['login_e'])) echo $_SESSION['login_e'];
        unset($_SESSION['login_e']);
       ?><br>
      <label>Hasło:<br> <input type="password" name="passwd"></label>
      <?php
        if (isset($_SESSION['passwd_e'])) echo $_SESSION['passwd_e'];
        unset($_SESSION['passwd_e']);
       ?><br>
      <label>Powtórz hasło:<br> <input type="password" name="rpasswd"></label><br>
      <label>E-Mail:<br> <input type="email" name="email"></label><br>
      <label><input type="checkbox" name="reg"> Akceptuję regulamin<br></label>
      <?php
        if (isset($_SESSION['reg_e'])) echo $_SESSION['reg_e'];
        unset($_SESSION['reg_e']);
       ?>
      <label><br><input type="submit" value="Zarejestruj"></label>
    </form>
  </body>
</html>
