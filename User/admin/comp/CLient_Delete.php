<?php 
    $level ="../";
    require_once ($level."config.php");
    require_once ($level."lib/db.php");

    if(isset($_GET['id_cli'])){ 
        $arr= array($_GET['id_cli']);
        DP::run_query("update `client` SET  `cliStatus`=0 WHERE cliID = ? ",$arr,1);  
        echo '<script language="javascript">';
        echo 'alert("Xóa thành công");';
        echo ' window.location="../pages/ListClient.php";';
        echo '</script>';
    }else{
        header("location:../index.php");
    }
   

?>