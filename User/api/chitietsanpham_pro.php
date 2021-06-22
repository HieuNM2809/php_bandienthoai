<?php
    $id=$_GET['id'];
    $query="select `prodID`, `prodName`, `prodPrice`, `prodSL`, `prodInit`,
     `prodReleaseYear`, `prodDescription`, `prodImg`, `prodStatus`, `provID`, `catID` FROM `product` WHERE prodID=$id";

    // bỏ cột img
    // $query="select `prodID`, `prodName`, `prodPrice`, `prodSL`, `prodInit`,
    //  `prodReleaseYear`, `prodDescription`, `prodStatus`, `provID`, `catID` FROM `product` WHERE prodID=$id";
      $sanpham=DP::run_query($query,[$id],2);
?>