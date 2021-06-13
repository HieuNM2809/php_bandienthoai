<?php 
     $query_com="select * from comment WHERE prodID =?";
     
     $lst_com=DP::run_query($query_com,[$_GET['id']],2);
?>