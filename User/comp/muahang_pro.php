<?php
    $query_sp="SELECT `prodID`, `prodName`, `prodPrice`,
     `prodSL`, `prodInit`, `prodReleaseYear`,
      `prodDescription`, `prodImg`, `prodStatus`, `provID`, `catID` FROM `product` limit 0,9";
   
   
    // bo cot img 
//    $query_sp="select `prodID`, `prodName`, `prodPrice`,
//    `prodSL`, `prodInit`, `prodReleaseYear`,
//     `prodDescription`,  `prodStatus`, `provID`, `catID` FROM `product` limit 0,9";
  
   $lst_sp=DP::run_query($query_sp,[],2);
?>