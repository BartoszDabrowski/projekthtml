<?php
session_start();
unset($_SESSION['cart']);
unset($_SESSION['item9']);
unset($_SESSION['item8']);
unset($_SESSION['item7']);
unset($_SESSION['item6']);
unset($_SESSION['item5']);
unset($_SESSION['item4']);
unset($_SESSION['item3']);
unset($_SESSION['item2']);
unset($_SESSION['item1']);
header('Location: ../cartshow.php')
?>
