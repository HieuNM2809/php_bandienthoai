<?php 
    $level ="../";
    require_once ($level."config.php");
    require_once ($level."lib/db.php");

    if(isset($_GET['id_prod'])){ 
        $arr = array($_GET['id_prod']);
        DP::run_query("update `product` SET `prodStatus`= 0 WHERE prodID =? ",$arr,1); 
        echo '<script language="javascript">';
        echo 'alert("Xóa thành công");';
        echo ' window.location="../pages/ListFilm.php";';
        echo '</script>';
    }else{
        header("location:../pages/ListFilm.php");
    }
   

?>