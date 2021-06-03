<?php
if(isset($_GET['cat']) && $_GET['cat']!=0)
{
    $cat=$_GET['cat'];
    $query_loaisp="SELECT `prodID`, `prodName`, `prodPrice`,
    `prodSL`, `prodInit`, `prodReleaseYear`,
    `prodDescription`, `prodImg`, `prodStatus`, `provID`, `catID` FROM `product` WHERE catID=$cat limit ".$index.",9";

    $lst_sp=DP::run_query($query_loaisp,[$cat],2);
}
else
{
    $query_sp="SELECT `prodID`, `prodName`, `prodPrice`,
    `prodSL`, `prodInit`, `prodReleaseYear`,
    `prodDescription`, `prodImg`, `prodStatus`, `provID`, `catID` FROM `product` limit ".$index.",9";
    $lst_sp=DP::run_query($query_sp,[],2);
}  
?>