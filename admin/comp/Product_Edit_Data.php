<?php 
    $level ="../";
    require_once ($level."config.php");
    require_once ($level."lib/db.php");

    if(isset($_GET['id_prod'])){ 
        $arr = array($_GET['id_prod']);
        $prod = DP::run_query('select * from product where  prodID =?',$arr,2);
    }
   

?>