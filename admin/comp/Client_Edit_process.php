<?php
    $level ="../";
    require_once ($level."config.php");
    require_once ($level."lib/db.php");
    
if($_REQUEST['cliID']){

    // update bẳng cli
    $strQuery = "update `client` SET `cliName`=?,
    `cliAddress`=?,`cliCountry`=?,
    `cliPostOfficeCode`=?,`cliPhone`=?,
    `cliUser`=?,`cliPass`=? WHERE `cliID` = ?";

    $paras = [];
    array_push($paras,$_REQUEST['cliName'],$_REQUEST['cliAddress'],$_REQUEST['cliCountry']);
    array_push($paras,$_REQUEST['cliPostOfficeCode'],$_REQUEST['cliPhone'],$_REQUEST['cliUser']);
    array_push($paras,$_REQUEST['cliPass'],$_REQUEST['cliID']);
    $result = DP::run_query($strQuery,$paras,1);

    if($result == true ){
        echo '<script language="javascript">';
        echo 'alert("Sửa khách hàng thành công");';
        echo ' window.location="../pages/ListClient.php";';
        echo '</script>';
    }else{
        echo '<script language="javascript">';
        echo 'alert("Sửa thất bại nhân viên thành công");';
        echo ' window.location="../pages/ListClient.php";';
        echo '</script>';
    }

}else{
    header("location:../pages/ListClient.php");
}
?>
