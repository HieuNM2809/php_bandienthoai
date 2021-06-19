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


    // cái chuông 
    // hiện số lượng đơn mới 
    $lstProNew = DP::run_query('select * from orderr where ordStatus = -2', [] , 2);
    $countNew= count($lstProNew);

    //hiện danh sách hóa đơn mới 
    $strOrderNew ='select * from orderr o , information_order i, client c ,product p WHERE o.ordID = i.ordID and o.cliID = c.cliID
    and i.prodID = p.prodID and o.ordStatus =-2 ';
    $lstOrderNew = DP::run_query($strOrderNew ,[],2);
?>