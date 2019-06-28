<!DOCTYPE html>
<?php
session_start();
$connect = @new mysqli("localhost","root","","projekt");
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
    if (isset($_POST['rejestruj']))
{
    if ($correct) {
    $login=$_POST['login'];
    $passwd=$_POST['passwd'];
    $rpasswd=$_POST['rpasswd'];
    $email=$_POST['email'];

      if (mysqli_num_rows(mysqli_query($connect,"SELECT login FROM uzytkownicy WHERE login = '".$login."';")) == 0)
          {
              if ($passwd == $rpasswd) // sprawdzamy czy hasła takie same
{
                //$passwd = password_hash($_POST['passwd'],PASSWORD_ARGON2ID);
                $passwd = password_hash($_POST['passwd'],PASSWORD_DEFAULT);

                  mysqli_query($connect,"INSERT INTO `uzytkownicy` (`login`, `haslo`, `email`)
                      VALUES ('".$login."', '".$passwd."', '".$email."');");

                  echo "Konto zostało utworzone!";
              }
              else echo "Hasła nie są takie same";
          }
          else echo "Podany login jest już zajęty.";

    }
  }
  }

 ?>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/solid.css" integrity="sha384-wnAC7ln+XN0UKdcPvJvtqIH3jOjs9pnKnq9qX68ImXvOGz2JuFoEiCjT8jyZQX2z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css" integrity="sha384-HbmWTHay9psM8qyzEKPc8odH4DsOuzdejtnr+OFtDmOcIVnhgReQ4GZBH7uwcjf6" crossorigin="anonymous">
    <title>Zarejestruj się!</title>
  </head>
  <body>

    <div class="container">
      <header>
        <a href="index.php">

        <div class="logo">
          LO
          <div class="logo1">
            GO
          </div>
          </a>
        </div>
        <div class="forms">
        </div>
        <div class="forms1">
        </div>

         <!-- <form action="cartshow.php" method="post"><input type="submit" name="poka" value="Pokaz koszyk"></form>; -->
         <a href="cartshow.php">
           <div class="cart">
              <i class="fas fa-cart-arrow-down"></i> <?php
              if(!isset($_SESSION['cart'])){
              $_SESSION['cart']=0;}
              echo $_SESSION['cart'];
              ?>
              zł
           </div>
        </a>
      </header>
      <menu>
        <ul>
          <li>Pole menu 1</li>
          <li>Pole menu 2</li>
          <li>Pole menu 3</li>
          <li>Pole menu 4</li>
          <li>Pole menu 5</li>
        </ul>
      </menu>
      <div class="content">
        <form  method="post" id='register'>
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
          <label><br><input type="submit" value="Zarejestruj" name="rejestruj"></label>
        </form>

      </div>
      <footer>
          <i class="fas fa-envelope"></i> kontakt@zadanie.pl
          <i class="fas fa-phone"></i> 123 456 789
         <i class="fas fa-heart"></i> tekst na stopke
      </footer>

    </div>
  </body>
</html>
