<?php

//------------------------------CHARTS----------------------------------------------------
     //================================================
    //==========Start  Lấy dữ liệu index toggle: 
    //================================================
    $countlst = DP::run_query('select p.prodID, p.prodName, i.InfoOrderPrice, i.InfoOrderSL, o.ordDate
    from product p, information_order i, orderr o 
    where p.prodID = i.prodID and i.ordID = o.ordID
    group by p.prodID ',[],2);

    $strCharts = "select p.prodID, p.prodName, i.InfoOrderPrice, i.InfoOrderSL, o.ordDate
                  from product p, information_order i, orderr o 
                  where p.prodID = i.prodID and i.ordID = o.ordID
                  group by p.prodID 
                  limit 0,5";
    $params =[];
    if(isset($_REQUEST['chart_mou']) && isset($_REQUEST['chart_Yea'])){ 
        $strCharts = "select p.prodID, p.prodName, i.InfoOrderPrice, i.InfoOrderSL, o.ordDate
        from product p, information_order i, orderr o 
        where p.prodID = i.prodID and i.ordID = o.ordID and MONTH(o.ordDate) =  ? and YEAR(o.ordDate) =  ? 
        group by p.prodID  limit 0,5 ";
        array_push($params, $_REQUEST['chart_mou'], $_REQUEST['chart_Yea']);
    }
    if(isset($_REQUEST['chart_Quy']) && isset($_REQUEST['chart_Yea'])){ 
        $sta = 0; $End = 0;
        if($_REQUEST['chart_Quy'] == 1){
            $sta = 1; $End = 3;
        }
        if($_REQUEST['chart_Quy'] == 2){
            $sta = 4; $End = 6;
        }
        if($_REQUEST['chart_Quy'] == 3){
            $sta = 7; $End = 9;
        }
        if($_REQUEST['chart_Quy'] == 4){
            $sta = 10; $End = 12;
        }

        $strCharts = "select p.prodID, p.prodName, i.InfoOrderPrice, i.InfoOrderSL, o.ordDate
        from product p, information_order i, orderr o 
        where p.prodID = i.prodID and i.ordID = o.ordID and MONTH(o.ordDate) >= ?  and MONTH(o.ordDate) <= ? 
        and YEAR(o.ordDate) =  ? 
        group by p.prodID   limit 0,5";
        array_push($params, $sta, $End, $_REQUEST['chart_Yea']);
    }
    if(isset($_REQUEST['chart_Year'])){ 
        $strCharts = "select p.prodID, p.prodName, i.InfoOrderPrice, i.InfoOrderSL, o.ordDate
        from product p, information_order i, orderr o 
        where p.prodID = i.prodID and i.ordID = o.ordID  and YEAR(o.ordDate) =  ? 
        group by p.prodID  limit 0,5 ";
        array_push($params, $_REQUEST['chart_Year']);
    }
    $lstCharts = DP::run_query($strCharts,$params,2);
?>

