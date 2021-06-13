<?php
    $level ="../";
    require_once ($level."config.php");
    require_once ($level."lib/db.php");
    
if($_REQUEST['ordID']){
    // // update bẳng ord
    $strQuery = "update `orderr` SET `ordStatus`=? WHERE  ordID =?";

    $paras = [];
    array_push($paras,$_REQUEST['ordStatus'],$_REQUEST['ordID']);
    $result = DP::run_query($strQuery,$paras,1);

    if($result == true ){
        echo '<script language="javascript">';
       // echo 'alert("Sửa trạng thái thành công");';
        echo ' window.location="../pages/ListPurchaseMenu.php";';
        echo '</script>';
    }else{
        echo '<script language="javascript">';
        echo 'alert("Sửa trạng thái thành công");';
        echo ' window.location="../pages/ListPurchaseMenu.php";';
        echo '</script>';
    }

}else{
    header("location:../pages/Order.php");
}
?>
