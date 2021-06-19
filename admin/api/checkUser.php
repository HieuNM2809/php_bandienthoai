<?php 
 $level ="../";
 require_once ($level."config.php");
 require_once ($level."lib/db.php");

 if(isset($_GET['us'])){
    $str ="SELECT * FROM `staff_login` WHERE LoginUserName =?";
    $params = [$_GET['us']];
     $result = DP::run_query($str,$params,2);
     if($_GET['us'] ==""){
        echo "";
     }
     else if($result == true ){
         echo "Tên không khả dụng";
     }else{
         echo "Tên khả dụng";
     }
 }

?>