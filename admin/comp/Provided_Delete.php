<?php 
    $level ="../";
    require_once ($level."config.php");
    require_once ($level."lib/db.php");

    if(isset($_GET['id_prov'])){ 
        $arr = array($_GET['id_prov']);
        DP::run_query("update `provided` SET `provStatus`= 0 WHERE provID = ? ",$arr,1); 
        echo '<script language="javascript">';
        echo 'alert("Xóa thành công");';
        echo ' window.location="../pages/ListProvided.php";';
        echo '</script>';
    }else{
        header("location:../index.php");
    }
   

?>