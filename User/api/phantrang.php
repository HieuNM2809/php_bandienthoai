<?php
    $query_total="SELECT COUNT(prodID) AS total FROM product";
    $total=DP::run_query($query_total,[],2);
    // kiểm tra bảng đã có dữ liệu chưa
    if($total!=null&&count($total)>0)
    {
        $number_product=$total[0]['total'];
    }
    $page=ceil($number_product/9);

    $current_page=1;
    if(isset($_GET['page']))
    {
        $current_page=$_GET['page'];
    }
    $index=($current_page-1)*9;

    $query_sp="SELECT `prodID`, `prodName`, `prodPrice`,
     `prodSL`, `prodInit`, `prodReleaseYear`,
      `prodDescription`, `prodImg`, `prodStatus`, `provID`, `catID` FROM `product` limit ".$index.",9";
    $lst_sp=DP::run_query($query_sp,[],2);
?>