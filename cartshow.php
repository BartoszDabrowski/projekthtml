<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/solid.css" integrity="sha384-wnAC7ln+XN0UKdcPvJvtqIH3jOjs9pnKnq9qX68ImXvOGz2JuFoEiCjT8jyZQX2z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css" integrity="sha384-HbmWTHay9psM8qyzEKPc8odH4DsOuzdejtnr+OFtDmOcIVnhgReQ4GZBH7uwcjf6" crossorigin="anonymous">
    <title>cartshow</title>
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

         <a href="cartshow.php">
        <div class="cart">
           <i class="fas fa-cart-arrow-down"></i> <?php
           //session_start();
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
        <?php
            $connect = @new mysqli("localhost","root","","projekt");
            $sql= "SELECT * FROM products where id=9";
            if ($result = @$connect->query($sql)) {
                   if ($result->num_rows) {
                     $rekord = $result->fetch_assoc();
                     $cena9=$rekord['cena'];
                     $nazwa9=$rekord['nazwa'];
                   }
                 }
                 $sql= "SELECT * FROM products where id=8";
                 if ($result = @$connect->query($sql)) {
                        if ($result->num_rows) {
                          $rekord = $result->fetch_assoc();
                          $cena8=$rekord['cena'];
                          $nazwa8=$rekord['nazwa'];
                        }
                      }
                      $sql= "SELECT * FROM products where id=7";
                      if ($result = @$connect->query($sql)) {
                             if ($result->num_rows) {
                               $rekord = $result->fetch_assoc();
                               $cena7=$rekord['cena'];
                               $nazwa7=$rekord['nazwa'];
                             }
                           }
                           $sql= "SELECT * FROM products where id=6";
                           if ($result = @$connect->query($sql)) {
                                  if ($result->num_rows) {
                                    $rekord = $result->fetch_assoc();
                                    $cena6=$rekord['cena'];
                                    $nazwa6=$rekord['nazwa'];
                                  }
                                }
                                $sql= "SELECT * FROM products where id=5";
                                if ($result = @$connect->query($sql)) {
                                       if ($result->num_rows) {
                                         $rekord = $result->fetch_assoc();
                                         $cena5=$rekord['cena'];
                                         $nazwa5=$rekord['nazwa'];
                                       }
                                     }
                                     $sql= "SELECT * FROM products where id=4";
                                     if ($result = @$connect->query($sql)) {
                                            if ($result->num_rows) {
                                              $rekord = $result->fetch_assoc();
                                              $cena4=$rekord['cena'];
                                              $nazwa4=$rekord['nazwa'];
                                            }
                                          }
                                          $sql= "SELECT * FROM products where id=3";
                                          if ($result = @$connect->query($sql)) {
                                                 if ($result->num_rows) {
                                                   $rekord = $result->fetch_assoc();
                                                   $cena3=$rekord['cena'];
                                                   $nazwa3=$rekord['nazwa'];
                                                 }
                                               }
                                               $sql= "SELECT * FROM products where id=2";
                                               if ($result = @$connect->query($sql)) {
                                                      if ($result->num_rows) {
                                                        $rekord = $result->fetch_assoc();
                                                        $cena2=$rekord['cena'];
                                                        $nazwa2=$rekord['nazwa'];
                                                      }
                                                    }
                                                    $sql= "SELECT * FROM products where id=1";
                                                    if ($result = @$connect->query($sql)) {
                                                           if ($result->num_rows) {
                                                             $rekord = $result->fetch_assoc();
                                                             $cena1=$rekord['cena'];
                                                             $nazwa1=$rekord['nazwa'];
                                                           }
                                                         }
            if(isset($_SESSION['item9']))
            {
              echo "<form action='cartclear9.php' method='post'>",
              $nazwa9," w ilości ", $_SESSION['item9'], " cena ", $cena9*$_SESSION['item9'], 'zł',
              "<input type='submit' value='X'class='remove'>
              </form><br>";
            }
            if(isset($_SESSION['item8']))
            {
              echo "<form action='cartclear8.php' method='post'>",
              $nazwa8," w ilości ", $_SESSION['item8'], " cena ", $cena8*$_SESSION['item8'], 'zł',
              "<input type='submit' value='X'class='remove'>
              </form><br>";
            }
            if(isset($_SESSION['item7']))
            {
              echo "<form action='cartclear7.php' method='post'>",
              $nazwa7," w ilości ", $_SESSION['item7'], " cena ", $cena7*$_SESSION['item7'], 'zł',
              "<input type='submit' value='X'class='remove'>
              </form><br>";
            }
            if(isset($_SESSION['item6']))
            {
              echo "<form action='cartclear6.php' method='post'>",
              $nazwa6," w ilości ", $_SESSION['item6'], " cena ", $cena6*$_SESSION['item6'], 'zł',
              "<input type='submit' value='X'class='remove'>
              </form><br>";
            }
            if(isset($_SESSION['item5']))
            {
              echo "<form action='cartclear5.php' method='post'>",
              $nazwa5," w ilości ", $_SESSION['item5'], " cena ", $cena5*$_SESSION['item5'], 'zł',
              "<input type='submit' value='X'class='remove'>
              </form><br>";
            }
            if(isset($_SESSION['item4']))
            {
              echo "<form action='cartclear4.php' method='post'>",
              $nazwa4," w ilości ", $_SESSION['item4'], " cena ", $cena4*$_SESSION['item4'], 'zł',
              "<input type='submit' value='X'class='remove'>
              </form><br>";
            }
            if(isset($_SESSION['item3']))
            {
              echo "<form action='cartclear3.php' method='post'>",
              $nazwa3," w ilości ", $_SESSION['item3'], " cena ", $cena3*$_SESSION['item3'], 'zł',
              "<input type='submit' value='X'class='remove'>
              </form><br>";
            }
            if(isset($_SESSION['item2']))
            {
              echo "<form action='cartclear2.php' method='post'>",
              $nazwa2," w ilości ", $_SESSION['item2'], " cena ", $cena2*$_SESSION['item2'],'zł',
              "<input type='submit' value='X'class='remove'>
              </form><br>";
            }
            if(isset($_SESSION['item1']))
            {
              echo "<form action='cartclear1.php' method='post'>",
              $nazwa1," w ilości ", $_SESSION['item1'], " cena ", $cena1*$_SESSION['item1'], 'zł',
              "<input type='submit' value='X'class='remove'>
              </form><br>";
            }
            echo "Zawartosc koszyka ", $_SESSION['cart'], " zł<br>";
            echo "<form action='cartclear.php' method='post'>
            <input class='clear' type='submit' value='Wyczyść koszyk'>
            </form>";
            if(isset($_SESSION['logged'])){
              if(isset($_SESSION['item9'])||isset($_SESSION['item8'])||isset($_SESSION['item7'])||isset($_SESSION['item6'])||isset($_SESSION['item5'])||isset($_SESSION['item4'])||isset($_SESSION['item3'])||isset($_SESSION['item2'])||isset($_SESSION['item1'])){
              echo "<form action='send.php' method='post'>
              <input class='clear' type='submit' value='Złóż zamówienie'>
              </form>";
            }
          }
        ?>
        <?php
        if (isset($_SESSION['error']))
        {
          $error = $_SESSION['error'];
          echo "<script type='text/javascript'>alert('$error');</script>";//echo $_SESSION['error'];
        unset($_SESSION['error']);
        }
         ?>
      </div>
      <footer>
          <i class="fas fa-envelope"></i> kontakt@zadanie.pl
          <i class="fas fa-phone"></i> 123 456 789
         <i class="fas fa-heart"></i> tekst na stopke
      </footer>
    </div>
  </body>
  </html>
