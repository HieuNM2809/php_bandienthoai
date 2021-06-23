<?php 
    $level ="../";
    require_once ($level."config.php");
    require_once ($level."lib/db.php");
    
    $strQuery ='select * 
    from orderr o , information_order i, client c ,product p 
    WHERE  c.cliID =? and o.ordID= ? and i.infoOrderID =? and p.prodID =? and 
     o.ordID = i.ordID and o.cliID = c.cliID and i.prodID = p.prodID';
 
    $params =[];
    array_push($params,
      $_GET['cliID'], 
      $_GET['ordID'],
      $_GET['infoOrderID'],
      $_GET['prodID'],
    );
    $cli_Ord_Info_in = DP::run_query($strQuery,$params,2);

    // echo $cli_Ord_Info_in[0][cliName];
    // echo "<pre>";
    // print_r( $cli_Ord_Info_in);
    // echo "</pre>";

?>