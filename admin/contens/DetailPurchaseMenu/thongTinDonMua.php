 <?php  require_once $level.compPart."DetailPurchaseMenu_Data.php"?>
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-12" id="hoadon">
                        <div class="card card-body printableArea">
                            <h3><b>Mã đơn mua</b> <span class="pull-right">
                                 #<?php echo $cli_Ord_Info_in[0]['cliID'].$cli_Ord_Info_in[0]['ordID'].$cli_Ord_Info_in[0]['infoOrderID'].$cli_Ord_Info_in[0]['prodID']; ?>
                            </span></h3>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="pull-left">
                                        <h3>Từ,</h3>
                                        <address>
                                            <h3> &nbsp;<b class="text-danger">OneWeek Phone</b></h3>
                                            <p class="text-muted m-l-5">SDT: 0799501324
                                                <br/>Địa Chỉ: 71, Nguyễn Phúc Chu, P.15, Q.TB, TP HCM
                                                <br/>FAX: 28092001
                                        </address>
                                    </div>
                                    <div class="pull-right text-right">
                                        <address>
                                            <h3>Đến,</h3>
                                            <h4 class="font-bold">
                                                <?php echo $cli_Ord_Info_in[0]['cliName']; ?> </h4>
                                            <p class="text-muted m-l-30">
                                                <?php echo $cli_Ord_Info_in[0]['cliPhone']; ?>
                                                <br/> 
                                                <?php echo $cli_Ord_Info_in[0]['cliAddress']; ?>
                                            <p class="m-t-30"><b>Ngày đặt hàng:</b> <i class="fa fa-calendar"></i>
                                               <?php echo $cli_Ord_Info_in[0]['ordDate']; ?></p>
                                            <p><b>Ngày dự kiến giao:</b> <i class="fa fa-calendar"></i>
                                            <?php echo  date ( 'Y-m-j' , strtotime ( '+10 day' , strtotime ( $cli_Ord_Info_in[0]['ordDate'] ) )) ; ?></p>
                                        </address>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="table-responsive m-t-40" style="clear: both;">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">STT</th>
                                                    <th>Tên sản phẩm</th>
                                                    <th class="text-right">Số lượng</th>
                                                    <th class="text-right">Giá</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                               <?php 
                                                 $i = 1;
                                                 foreach( $cli_Ord_Info_in as $value){
                                               ?>
                                                <tr>
                                                    <td class="text-center"><?php  echo $i ?></td>
                                                    <td><?php echo $value['prodName'] ?></td>
                                                    <td class="text-right"><?php echo $value['infoOrderSL'] ?> </td>
                                                    <td class="text-right"> <?php echo  number_format($value['infoOrderPrice'])." VND"?></td>
                                                </tr>
                                                <?php  $i++;} ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="pull-right m-t-30 text-right">
                                        <p>Tiền: <?php echo  number_format($value['infoOrderPrice'] * $value['infoOrderSL'])." VND"?></p>
                                        <p>Shipper : 10.000 VND </p>
                                        <hr>
                                        <h3><b>Tổng :</b> <?php echo  number_format($value['infoOrderPrice'] * $value['infoOrderSL'] + 10000)." VND"?></h3>
                                    </div>
                                    <div class="clearfix"></div>
                                    <hr>
                                    <div class="text-right">
                                        <a href="javascript:printPage();" class="btn btn-danger" > In hóa đơn</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->



<script language="javascript">
  function printPage(){
    var html = document.getElementById('hoadon').innerHTML;
    var printWin = window.open('','_blank','left=0,top=0,width=800,height=600,toolbar=0,scrollbars=0,status=1,titlebar=1');
    printWin.document.write(html);
    printWin.document.close();
    printWin.focus();
    printWin.print();
    printWin.close();
}
</script>