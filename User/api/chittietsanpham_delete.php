<?php 
    $level ="../";
    require_once ($level."config.php");
    require_once ($level."lib/db.php");
    
   
    // update comment 
    if(isset($_GET['comID'])){ 
        $params =[];
        array_push($params, $_GET['comID']);
        $strCom ="delete FROM `comment` WHERE comID=?";
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
        <?php
            if(isset($_SESSION['username'])){
                echo '<button type="button" onclick="delComment'.$value['comID'].'()" class="btn btn-danger">Xóa</button>';
            }
            ?> 
            <script>
            function delComment<?php echo $value['comID']?>() {
                var url="../api/chittietsanpham_delete.php?comID="+<?php echo $value['comID']?>+"&prodID="+ <?php echo $value['prodID']?>;
                const xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("content_conment").innerHTML =  this.responseText;
                    }
                };
                xhttp.open("GET", url);
                xhttp.send();
            }
            </script>
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