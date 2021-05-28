<?php 
    $level ="../";
    require_once ($level."config.php");
    require_once ($level."lib/db.php");

    if($_REQUEST['provName']){
        $strQuery = "insert INTO `provided`(`provFullName`, `provName`, `provAddress`, `provPostOfficeCode`, `provCountry`, `provPhone`, `provDescription`, `provStatus`) 
        VALUES (?,?,?,?,?,?,?,?)";
        $paras = [];
        array_push($paras,$_REQUEST['provFullName'],$_REQUEST['provName'],$_REQUEST['provAddress']);
        array_push($paras,$_REQUEST['provPostOfficeCode'],$_REQUEST['provCountry'],$_REQUEST['provPhone']);
        array_push($paras,$_REQUEST['provDescription'],1);

       // var_dump($paras);
       $result = DP::run_query($strQuery,$paras,1);

        if($result == true ){  
            echo '<script language="javascript">';
            echo 'alert("Thêm nhà cung cấp thành công");';
            echo ' window.location="../pages/CreateProvided.php";';
            echo '</script>';
        }
        else{
            echo 'alert("Thêm nhà cung cấp thất bại");';
            echo ' window.location="../pages/CreateProvided.php";';
            echo '</script>';
        }
    }
    else  header("location:../pages/CreateProvided.php");
    
?>
 
