<?php
    $level ="../";
    require_once ($level."config.php");
    require_once ($level."lib/db.php");
if($_REQUEST['provID']){

    // update bẳng provided
    $strQuery = "update `provided` SET `provFullName`=? ,`provName`= ?,`provAddress`=?,`provPostOfficeCode`=?
    ,`provCountry`=?,`provPhone`=?,`provDescription`=? WHERE provID =?";
    $paras = [];
    array_push($paras,$_REQUEST['provFullName'],$_REQUEST['provName'],$_REQUEST['provAddress']);
    array_push($paras,$_REQUEST['provPostOfficeCode'],$_REQUEST['provCountry'],$_REQUEST['provPhone']);
    array_push($paras,$_REQUEST['provDescription'],$_REQUEST['provID']);
    $result = DP::run_query($strQuery,$paras,1);

    if($result == true ){
        echo '<script language="javascript">';
        echo 'alert("Sửa nhà cung cấp thành công");';
        echo ' window.location="../pages/ListProvided.php";';
        echo '</script>';
    }

}else{
    header("location:../pages/ListProvided.php");
}
?>
