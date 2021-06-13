<?php 
    $level ="../";
    require_once ($level."config.php");
    require_once ($level."lib/db.php");

    // update comment 
    if(isset($_GET['prodID'])){ 
        $params =[];
        array_push($params, $_GET['prodID'], $_GET['comUser'], $_GET['comContent'], date('Y-m-d'), date('H') );
        $strCom ="insert INTO `comment`(`prodID`, `comUser`, `comContent`, `comDate`, `comTime`) 
                 VALUES (?,?,?,?,?)";
        DP::run_query($strCom,$params,1);
    }
    // lay danh sach commnet moi
    $query_com="select * from comment WHERE prodID =?";
    $lst_com=DP::run_query($query_com,[$_GET['prodID']],2);
    foreach( $lst_com as $value){
?>
    <h4>
        <?php echo $value['comUser']; ?>
        <i style="font-size:15px;color: #5c8284;">
                Đăng  <?php echo $value['comTime'] ?>h   <?php echo  date('Y-m-d',strtotime($value['comDate']))  ?>
        </i> 
    </h4>
    <p>
        <?php echo $value['comContent'] ?> 
    </p>
    <div  style="display:none"; id="prodIDcom">
        <?php echo $value['prodID'] ?> 
    </div>
<?php
 }
?>  