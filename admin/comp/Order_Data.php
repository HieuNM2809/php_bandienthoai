<?php 
    $level ="../";
    require_once ($level."config.php");
    require_once ($level."lib/db.php");
    
    $strQuery ='select * from orderr o , information_order i, client c ,product p WHERE o.ordID = i.ordID and o.cliID = c.cliID
      and i.prodID = p.prodID and o.ordStatus <> -2 and o.ordStatus <> -3  ';
    $params =[];
    if(isset($_GET['sreach_sta'])){
         $strQuery ='select * from orderr o , information_order i,
         client c ,product p WHERE o.ordID = i.ordID and 
         o.cliID = c.cliID and i.prodID = p.prodID
         and o.ordStatus =? and o.ordStatus <> -2 and o.ordStatus <> -3 ';
         array_push($params,$_GET['sreach_sta']);
    }
    if(isset($_GET['sreach_dat'])){
        $strQuery ='select * from orderr o , information_order i,
        client c ,product p WHERE o.ordID = i.ordID and 
        o.cliID = c.cliID and i.prodID = p.prodID
        and o.ordDate =? and o.ordStatus <> -2  and o.ordStatus <> -3';
        array_push($params,$_GET['sreach_dat']);
   }
    $cli_Ord_Info = DP::run_query($strQuery,$params,2);

?>