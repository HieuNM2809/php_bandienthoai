<?php 
    $level ="../";
    require_once ($level."config.php");
    require_once ($level."lib/db.php");

    if(isset($_GET['id_cli'])){ 
        $arr = array($_GET['id_cli']);
        $cli = DP::run_query('select * from client where  cliID =?',$arr,2);
    }
   

?>