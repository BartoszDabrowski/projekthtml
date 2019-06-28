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
          </a>
        </div>

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
        <?php
            session_start();
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
              echo $nazwa9," w ilości ", $_SESSION['item9'], " cena ", $cena9*$_SESSION['item9'], "zł<br>";
            }
            if(isset($_SESSION['item8']))
            {
              echo $nazwa8," w ilości ", $_SESSION['item8'], " cena ", $cena8*$_SESSION['item8'], "zł<br>";
            }
            if(isset($_SESSION['item7']))
            {
              echo $nazwa7," w ilości ", $_SESSION['item7'], " cena ", $cena7*$_SESSION['item7'], "zł<br>";
            }
            if(isset($_SESSION['item6']))
            {
              echo $nazwa6," w ilości ", $_SESSION['item6'], " cena ", $cena6*$_SESSION['item6'], "zł<br>";
            }
            if(isset($_SESSION['item5']))
            {
              echo $nazwa5," w ilości ", $_SESSION['item5'], " cena ", $cena5*$_SESSION['item5'], "zł<br>";
            }
            if(isset($_SESSION['item4']))
            {
              echo $nazwa4," w ilości ", $_SESSION['item4'], " cena ", $cena4*$_SESSION['item4'], "zł<br>";
            }
            if(isset($_SESSION['item3']))
            {
              echo $nazwa3," w ilości ", $_SESSION['item3'], " cena ", $cena3*$_SESSION['item3'], "zł<br>";
            }
            if(isset($_SESSION['item2']))
            {
              echo $nazwa2," w ilości ", $_SESSION['item2'], " cena ", $cena2*$_SESSION['item2'], "zł<br>";
            }
            if(isset($_SESSION['item1']))
            {
              echo $nazwa1," w ilości ", $_SESSION['item1'], " cena ", $cena1*$_SESSION['item1'], "zł<br>";
            }
            echo "Zawartosc koszyka ", $_SESSION['cart'], " zł";
            //header('Location: index1.php');
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
