<?php

 //================================================
    //==========Start Cộng số lần truy cập 
    //================================================
    DP::run_query("update `access` SET `SL`=`SL`+1 ",[],1);
    $soLuongView = DP::run_query("select `SL` FROM `access`",[],2);

//------------------------------INDEX----------------------------------------------------
     //================================================
    //==========Start  Lấy dữ liệu index toggle: 
    //================================================
    $strQueryProHost = "select img.img1 ,pd.prodName ,iod.infoOrderSL from product pd, information_order iod, images img where pd.prodID = iod.prodID and pd.prodID = img.prodID GROUP by pd.prodID order by sum(iod.infoOrderSL) desc limit 0,4";
    $lstProductHot = DP::run_query($strQueryProHost,[],2);

     //================================================
    //==========Start  Lấy dữ liệu index toggle: 
    //================================================
    $strQueryProLess = "select img.img1 ,pd.prodName ,iod.infoOrderSL from product pd, information_order iod, images img where pd.prodID = iod.prodID and pd.prodID = img.prodID GROUP by pd.prodID order by sum(iod.infoOrderSL) ASC limit 0,4";
    $lstProductLess = DP::run_query($strQueryProLess,[],2);

    

//------------------------------STAFF----------------------------------------------------
     //================================================
    //==========Start  insert du lieu cho nhan vien
    //================================================
    // lấy ID max để làm khóa chính 
    $maxId = DP::run_query('select max(LoginID)+1 from staff_login',[],2);

   
    //==========Start  lấy dư liệu staff: 
    //================================================ 
     $listStaff = DP::run_query('select * from staff where staStatus = 1 order by staID desc',[],2);

    //================================================
    //==========Start  lấy dư liệu Client: 
    //================================================
    $listClient = DP::run_query('select * from client where cliStatus =1',[],2);



    //================================================
    //==========Start  lấy dư liệu List film: 
    //================================================
    $strQueryFilm ='select * from product pd, images img where pd.prodID = img.prodID and pd.prodStatus = 1';
    if( isset($_GET['keyName'])){
        if( $_GET['keyName'] !=""  && $_GET['keyYear'] == "" && $_GET['keyPrice'] == "" ){
            $strQueryFilm ="select * from product pd, images img
            where pd.prodID = img.prodID and pd.prodStatus = 1  and pd.prodName like '%".$_GET['keyName'] ."%'";
        }
        if( $_GET['keyYear'] !="" && $_GET['keyName'] == "" && $_GET['keyPrice'] == "" ){
            $strQueryFilm ="select * from product pd, images img
            where pd.prodID = img.prodID and pd.prodStatus = 1  and pd.prodReleaseYear = ".$_GET['keyYear'];
        }
        if( $_GET['keyPrice'] !=""  && $_GET['keyName'] == "" && $_GET['keyYear'] == "" ){
            $strQueryFilm ="select * from product pd, images img
            where pd.prodID = img.prodID and pd.prodStatus = 1  and pd.prodPrice <= ".$_GET['keyPrice'];
        }
        if( $_GET['keyPrice'] !=""  && $_GET['keyName'] != "" && $_GET['keyYear'] != "" ){
            $strQueryFilm ="select * from product pd, images img
            where pd.prodID = img.prodID and pd.prodStatus = 1  and pd.prodPrice <= ".$_GET['keyPrice'].
            " and pd.prodReleaseYear = ".$_GET['keyYear'].
            " and pd.prodName like '%".$_GET['keyName'] ."%'";
        }
        if( $_GET['keyPrice'] !=""  && $_GET['keyName'] != "" && $_GET['keyYear'] == "" ){
            $strQueryFilm ="select * from product pd, images img
            where pd.prodID = img.prodID and pd.prodStatus = 1  and pd.prodPrice <= ".$_GET['keyPrice'].
            " and pd.prodName like '%".$_GET['keyName'] ."%'";
        }
        if( $_GET['keyPrice'] !=""  && $_GET['keyName'] == "" && $_GET['keyYear'] != "" ){
            $strQueryFilm ="select * from product pd, images img
            where pd.prodID = img.prodID and pd.prodStatus = 1  and pd.prodPrice <= ".$_GET['keyPrice'].
            " and pd.prodReleaseYear = ".$_GET['keyYear'];
        }
        if( $_GET['keyPrice'] ==""  && $_GET['keyName'] != "" && $_GET['keyYear'] != "" ){
            $strQueryFilm ="select * from product pd, images img
            where pd.prodID = img.prodID and pd.prodStatus = 1".
            " and pd.prodReleaseYear = ".$_GET['keyYear'].
            " and pd.prodName like '%".$_GET['keyName'] ."%'";
        }
    }
    $lstFilm = DP::run_query($strQueryFilm ,[],2);




     //================================================
    //==========Start  lấy dư liệu Provided: 
    //================================================
    $listProvided = DP::run_query('select * from provided where provStatus = 1 order by provID desc',[],2);
    
?>