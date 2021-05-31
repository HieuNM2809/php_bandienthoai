<?php
    require($level.lib_path."db.php");
    $query="SELECT `prodID`, `prodName`, `prodPrice`,
     `prodSL`, `prodInit`, `prodReleaseYear`,
      `prodDescription`, `prodImg`, `prodStatus`, `provID`, `catID` FROM `product` limit 0,9";
    $lst_sp=DP::run_query($query,[],2);
?>