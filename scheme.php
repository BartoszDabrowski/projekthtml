<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href=" style/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/solid.css" integrity="sha384-wnAC7ln+XN0UKdcPvJvtqIH3jOjs9pnKnq9qX68ImXvOGz2JuFoEiCjT8jyZQX2z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css" integrity="sha384-HbmWTHay9psM8qyzEKPc8odH4DsOuzdejtnr+OFtDmOcIVnhgReQ4GZBH7uwcjf6" crossorigin="anonymous">
    <title>Strona-zadanie</title>

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

        </div>
      </a>
      <div class="forms">
        <?php session_start();
        if (isset($_SESSION['logged'])) {
        echo "witaj: ",$_SESSION['user'];

      }else {
        //echo " <a href='index.php'>Zaloguj</a>";
        echo "<form action='connect.php' method='post'>
        Login: <input type='text' name='login' id='login'>
        Hasło: <input type='password' name='password' id='passwd'>
        <input type='submit' value='Zaloguj się'>
      </form>";
      }

         ?>
      </div>
      <div class="forms1">
        <?php
        if (!isset($_SESSION['logged'])) {
        echo "<form action='register.php' method='post'>
        <input type='submit' value='Zarejestruj się'>
        </form>";
      }else {
        echo " <a href='logout.php'>Wyloguj</a>";
      }
        ?>
      </div>
         <a href="cartshow.php" >
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
        tu masz zawartosc
      </div>
      <footer>
        <!-- <section class="contact"> -->
          <i class="fas fa-envelope"></i> kontakt@zadanie.pl
          <i class="fas fa-phone"></i> 123 456 789
        <!-- </section> -->
         <i class="fas fa-heart"></i> tekst na stopke
      </footer>
      <?php
      if (isset($_SESSION['error']))
      {
        $error = $_SESSION['error'];
        echo "<script type='text/javascript'>alert('$error');</script>";//echo $_SESSION['error'];
      unset($_SESSION['error']);
      }
       ?>
    </div>
  </body>
</html>
