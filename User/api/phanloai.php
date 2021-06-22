<?php
if(isset($_GET['cat']) && $_GET['cat']!=0)
{
    $cat=$_GET['cat'];
    $query_loaisp="SELECT product.prodID,prodName, prodPrice, prodSL, prodInit, prodReleaseYear,
    prodDescription, prodStatus, provID, catID,images.img1
    FROM product 
    JOIN images ON product.prodID = images.prodID WHERE catID=$cat limit ".$index.",9";
    $lst_sp=DP::run_query($query_loaisp,[$cat],2);
}
//tìm kiếm theo từ khóa
else if(isset($_GET['search']))
{
    $search=$_GET['search'];
    $query_search="SELECT product.prodID,prodName, prodPrice, prodSL, prodInit, prodReleaseYear, prodDescription, prodStatus, provID, catID,images.img1 FROM product 
    JOIN images ON product.prodID = images.prodID
    WHERE prodName LIKE '%".$search."%' limit ".$index.",9";
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
    $query_sp="SELECT product.prodID,prodName, prodPrice, prodSL, prodInit, prodReleaseYear,
    prodDescription, prodStatus, provID, catID,images.img1
    FROM product 
    JOIN images ON product.prodID = images.prodID limit ".$index.",9";
    $lst_sp=DP::run_query($query_sp,[],2);
}


?>