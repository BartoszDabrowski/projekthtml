<?php
session_start();
$connect = @new mysqli("localhost","root","","projekt");
if(isset($_SESSION['item9']))
{
mysqli_query($connect,"INSERT INTO `zamowienia` (`kupiec`, `przedmiot_id`, `ilosc`)
    VALUES ('".$_SESSION['user']."', '9', '".$_SESSION['item9']."');");
  }
  if(isset($_SESSION['item8']))
  {
  mysqli_query($connect,"INSERT INTO `zamowienia` (`kupiec`, `przedmiot_id`, `ilosc`)
      VALUES ('".$_SESSION['user']."', '8', '".$_SESSION['item8']."');");
    }
    if(isset($_SESSION['item7']))
    {
    mysqli_query($connect,"INSERT INTO `zamowienia` (`kupiec`, `przedmiot_id`, `ilosc`)
        VALUES ('".$_SESSION['user']."', '7', '".$_SESSION['item7']."');");
      }
      if(isset($_SESSION['item6']))
      {
      mysqli_query($connect,"INSERT INTO `zamowienia` (`kupiec`, `przedmiot_id`, `ilosc`)
          VALUES ('".$_SESSION['user']."', '6', '".$_SESSION['item6']."');");
        }
        if(isset($_SESSION['item5']))
        {
        mysqli_query($connect,"INSERT INTO `zamowienia` (`kupiec`, `przedmiot_id`, `ilosc`)
            VALUES ('".$_SESSION['user']."', '5', '".$_SESSION['item5']."');");
          }
          if(isset($_SESSION['item4']))
          {
          mysqli_query($connect,"INSERT INTO `zamowienia` (`kupiec`, `przedmiot_id`, `ilosc`)
              VALUES ('".$_SESSION['user']."', '4', '".$_SESSION['item4']."');");
            }
            if(isset($_SESSION['item3']))
            {
            mysqli_query($connect,"INSERT INTO `zamowienia` (`kupiec`, `przedmiot_id`, `ilosc`)
                VALUES ('".$_SESSION['user']."', '3', '".$_SESSION['item3']."');");
              }
              if(isset($_SESSION['item2']))
              {
              mysqli_query($connect,"INSERT INTO `zamowienia` (`kupiec`, `przedmiot_id`, `ilosc`)
                  VALUES ('".$_SESSION['user']."', '2', '".$_SESSION['item2']."');");
                }
                if(isset($_SESSION['item1']))
                {
                mysqli_query($connect,"INSERT INTO `zamowienia` (`kupiec`, `przedmiot_id`, `ilosc`)
                    VALUES ('".$_SESSION['user']."', '1', '".$_SESSION['item1']."');");
                  }
  header('Location: cartclear.php')
?>
