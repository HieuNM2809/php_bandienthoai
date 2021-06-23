<?php 
    $level ="../";
    require_once ($level."config.php");
    require_once ($level."lib/db.php");

    if(isset($_GET['id'])){ 
        $arr = array($_GET['id']);
        $arr2 = array($_GET['id_Login']);
        $staff = DP::run_query('select * from staff where staStatus = 1 and staID =?',$arr,2);
        $staff_Login = DP::run_query('select * from staff_login where LoginStatus = 1 and LoginID =?',$arr2,2);
    }
   

?>