
<?php
    if(isset($_GET['id_cli']) ==false) {
        // header("location:../index.php");
        echo '<script language="javascript">';
        echo 'alert("Hãy chọn nhân viên để xem chi tiết ");';
        echo ' window.location="ListClient.php";';
        echo '</script>';
    }
    $level = "../";
    $Isindex                     =false;
    $Isauthentication_login      =false;
    $Isauthentication_register   =false;
    $Ischarts                    =false;
    $IscreateStaff               =false;
    $IsdetailClient              =true;
    $IsdetailPurchaseMenu        =false;
    $IslistClient                =false;
    $IslistFilm                  =false;
    $IslistPurchaseMenu          =false;
    $IslistStaff                 =false;
    $Isorder                     =false;

    require_once ($level."layout.php");
?>

        