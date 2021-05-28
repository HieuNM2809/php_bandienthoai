<?php
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

   //------------------------------CHARTS----------------------------------------------------
     //================================================
    //==========Start  Lấy dữ liệu index toggle: 
    //================================================
    $strCharts = "select pd.prodID, pd.prodReleaseYear ,pd.prodName ,iod.infoOrderSL, pd.prodPrice ,pd.prodStatus from product pd, information_order iod, images img where pd.prodID = iod.prodID and pd.prodID = img.prodID 
    GROUP by pd.prodID order by pd.prodID ASC limit 0,5";
    $pageLimit =[];
    if(isset($_GET['pageCharts']) && $_GET['pageCharts'] >= 1 && $_GET['pageCharts']<=4){ 
        if($_GET['pageCharts'] == 2){$pageLimit =array(5,5);}else
        if($_GET['pageCharts'] == 1){$pageLimit =array(0,5);}else
        if($_GET['pageCharts'] == 3){$pageLimit =array(10,5);}else
        if($_GET['pageCharts'] == 4){$pageLimit =array(15,5);} 
        $strCharts = "select pd.prodID, pd.prodReleaseYear ,pd.prodName ,iod.infoOrderSL, pd.prodPrice ,pd.prodStatus from product pd, information_order iod, images img where pd.prodID = iod.prodID and pd.prodID = img.prodID 
        GROUP by pd.prodID order by pd.prodID ASC limit ?,?";
    }
    $lstCharts = DP::run_query($strCharts,$pageLimit,2); 

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
    $lstFilm = DP::run_query('select * from product pd, images img where pd.prodID = img.prodID',[],2);

     //================================================
    //==========Start  lấy dư liệu Provided: 
    //================================================
    $listProvided = DP::run_query('select * from provided where provStatus = 1',[],2);
    
?>