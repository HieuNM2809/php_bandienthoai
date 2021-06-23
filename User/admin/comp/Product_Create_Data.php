<?php 
    $level ="../";
    require_once ($level."config.php");
    require_once ($level."lib/db.php");
    $lstProv = DP::run_query('select * FROM `provided`',[],2);

?>