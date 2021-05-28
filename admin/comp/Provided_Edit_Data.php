<?php 
    $level ="../";
    require_once ($level."config.php");
    require_once ($level."lib/db.php");
    if(isset($_GET['id_prov'])){ 
        $arr = array($_GET['id_prov']);
        $prov = DP::run_query('select * from provided where provID =?',$arr,2);
    }
 //   var_dump($prov);
?>