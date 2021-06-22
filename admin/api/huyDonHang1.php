<?php
    $level ="../";
    require_once ($level."config.php");
    require_once ($level."lib/db.php");
    
    // // update bẳng ord
    $strQuery = "update `orderr` SET `ordStatus`=-3 WHERE  ordID =?";
    $result = DP::run_query($strQuery,[$_GET['ordID']],1);


    // lay lai hoa don new 
    $strOrderNew ='select * from orderr o , information_order i, client c ,product p WHERE o.ordID = i.ordID and o.cliID = c.cliID
    and i.prodID = p.prodID and o.ordStatus =-2 ';
    $lstOrderNew = DP::run_query($strOrderNew ,[],2);
?>

<?php foreach( $lstOrderNew as $value){
?>
    <tr>
        <td><?php echo $value['prodName'] ?></td>
        <td><?php echo $value['infoOrderSL'] ?></td>
        <td><button onclick="xacNhanHoaDon('<?php  echo $value['ordID'] ?>');" type="button" class="btn btn-primary">Xác nhận</button></td>
        <td><button onclick="huyHoaDon('<?php  echo $value['ordID'] ?>');" type="button" class="btn btn-danger">Hủy</button></td>
    </tr>
<?php } ?>