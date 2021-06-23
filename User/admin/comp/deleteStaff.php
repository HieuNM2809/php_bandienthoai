<?php 
    $level ="../";
    require_once ($level."config.php");
    require_once ($level."lib/db.php");

    if(isset($_GET['id'])){ 
        $arr = array($_GET['id']);
        $arr2 = array($_GET['id_Login']);
        DP::run_query("update `staff` SET `staStatus`= 0 WHERE staID = ? ",$arr,1); 
        DP::run_query("update `staff_login` SET `LoginStatus`= 0 WHERE LoginID=?",$arr2,1); 
        echo '<script language="javascript">';
        echo 'alert("Xóa thành công");';
        echo ' window.location="../pages/ListStaff.php";';
        echo '</script>';
    }else{
        header("location:../index.php");
    }
   

?>