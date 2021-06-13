<?php
    $level ="../";
    require_once ($level."config.php");
    require_once ($level."lib/db.php");
    
if($_REQUEST['ordID']){
    // // update bẳng ord
    $strQuery = "update `orderr` SET `ordStatus`=? WHERE  ordID =?";

    $ordSta = 0;
    if($_REQUEST['sta'] =="Chưa giao"){
        $ordSta = -1;
    }else if($_REQUEST['sta'] =="Đang giao"){
        $ordSta = 0;
    }else{
        $ordSta = 1;
    }
    $paras = [];
    array_push($paras, $ordSta, $_REQUEST['ordID']);
    $result = DP::run_query($strQuery,$paras,1);

    echo "Thành công";
    
}else{
    header("location:../pages/Order.php");
}
?>