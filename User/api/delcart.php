<?php 
    session_start();
    // $cart=$_SESSION['cart'];
    // $idprod=$_GET['prodid'];
    // if($idprod==0)
    // {
    //     unset($_SESSION['cart']);
    // }
    // else
    // {
    //     unset($_SESSION['cart'][$idprod]);
    // }
    session_destroy();
    header("location: /PHP_OneWeek/User/pages/MuaHang.php");
    exit();
?>