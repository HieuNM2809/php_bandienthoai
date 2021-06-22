<?php
if(isset($_GET['cat']) && $_GET['cat']!=0)
{
    $cat=$_GET['cat'];
    $query_loaisp="SELECT `prodID`, `prodName`, `prodPrice`,
    `prodSL`, `prodInit`, `prodReleaseYear`,
    `prodDescription`, `prodImg`, `prodStatus`, `provID`, `catID` FROM `product` WHERE catID=$cat limit ".$index.",9";
    $lst_sp=DP::run_query($query_loaisp,[$cat],2);
}
//tìm kiếm theo từ khóa
else if(isset($_GET['search']))
{
    $search=$_GET['search'];
    $query_search="SELECT * FROM `product` WHERE `prodName` LIKE '%".$search."%' limit ".$index.",9";
    $lst_sp=DP::run_query($query_search,[$search],2);
}
else if(isset($_GET['price1']) && $_GET['price1']!=0)
{
    $price=$_GET['price1'];
    $query_price="SELECT * FROM `product` WHERE `prodPrice`>= $price limit ".$index.",9";
    $lst_sp=DP::run_query($query_price,[$price],2);
}
else if(isset($_GET['price2']) && $_GET['price2']!=0)
{
    $price=$_GET['price2'];
    $query_price="SELECT * FROM `product` WHERE `prodPrice`<= $price limit ".$index.",9";
    $lst_sp=DP::run_query($query_price,[$price],2);
}
else if(isset($_GET['price3']) && $_GET['price3']!=0)
{
    $price=$_GET['price3'];
    $query_price="SELECT * FROM `product` WHERE `prodPrice`<= $price limit ".$index.",9";
    $lst_sp=DP::run_query($query_price,[$price],2);
}
else if(!isset($_GET['search']) && !isset($_GET['cat']) || $_GET['cat']==0)
{
    $query_sp="SELECT `prodID`, `prodName`, `prodPrice`,
    `prodSL`, `prodInit`, `prodReleaseYear`,
    `prodDescription`, `prodImg`, `prodStatus`, `provID`, `catID` FROM `product` limit ".$index.",9";
    $lst_sp=DP::run_query($query_sp,[],2);
}


?>