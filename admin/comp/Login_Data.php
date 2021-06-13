<?php 
    $params = [];
    array_push($params, $_SESSION['username']);
    $strID ="select LoginID from staff_login where LoginUserName=?";
    $ID_Login = DP::run_query($strID ,$params,2);


    $pa =[];
    array_push($pa,$ID_Login[0]['LoginID']);
    $strStaff ="select * from staff where staID =?";
    $staInfoLogin = DP::run_query($strStaff,$pa, 2);
    // echo "<pre>";
    // print_r( $staInfoLogin);
    // echo "</pre>";

?>