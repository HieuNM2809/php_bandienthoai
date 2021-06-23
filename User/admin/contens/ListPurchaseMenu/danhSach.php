<?php require_once($level."comp/Order_Data.php");  ?>
        <!-- ============================================================== -->
        <!-- Charts pages  -->
        <!-- ============================================================== -->
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <div id="zero_config_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                        <div class="row mb-2">
                            <div class="col-12 d-flex no-block align-items-center">
                                <div id="zero_config_filter" class="dataTables_filter" style="margin: auto;">
                                    <form style="display: flex;">
                                        <input name="sreach_dat" type="date" style="width: 100%; margin-left: 10px; font-size: medium;border-color: blueviolet;"
                                            class="form-control form-control-sm" >
                                        <button type="submit" class="btn btn-cyan btn-sm">Tìm kiếm</button>                   
                                    </form>
                                </div>
                                <div id="zero_config_filter" class="dataTables_filter" style="margin: auto;">
                                    <form style="display: flex;">
                                        <select name="sreach_sta" class="select2 form-control custom-select" style="width: 15vw; height:36px;">
                                            <option value="-1">Chưa giao</option>
                                            <option value="0">Đang giao</option>
                                            <option value="1">Đã giao</option>
                                        </select>
                                        <button type="submit" class="btn btn-cyan btn-sm">Tìm kiếm</button>                   
                                    </form>
                                </div>
                                <div id="zero_config_filter" class="dataTables_filter" style="margin: auto;">
                                    <form style="display: flex;">
                                        <button style="height:36px;" type="submit" class="btn btn-cyan btn-sm">Xem tất cả</button>                   
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="zero_config" class="table table-striped table-bordered dataTable" role="grid"
                                    aria-describedby="zero_config_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting"  rowspan="1" colspan="1"
                                                style="width: 76.6667px;">In</th>
                                            <th class="sorting_asc"  rowspan="1"  colspan="1"  
                                                style="width: 126.333px;">Tên người mua</th>
                                            <th class="sorting"  rowspan="1" colspan="1" 
                                                style="width: 207.667px;">Địa chỉ</th>
                                            <th class="sorting"  rowspan="1" colspan="1"
                                                style="width: 90.3333px;">Số điện thoại</th>
                                            <th class="sorting"  rowspan="1" colspan="1"
                                                style="width: 37px;">Ngày mua </th>
                                            <th class="sorting"  rowspan="1" colspan="1"
                                                style="width: 37px;">Tên sản phẩm</th>
                                            <th class="sorting"  rowspan="1" colspan="1"
                                                style="width: 20px;"> Số lượng</th>
                                            <th class="sorting"  rowspan="1" colspan="1"
                                                style="width: 76.6667px;">Giá</th>
                                            <th class="sorting"  rowspan="1" colspan="1"
                                                style="width: 76.6667px;">Trạng thái</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach( $cli_Ord_Info as $value){
                                        ?>
                                            <tr role="row" class="even">
                                                <td>
                                                   <a href="<?php echo $level.pages_Part."detailPurchaseMenu.php?cliID=".$value['cliID']."&ordID=".$value['ordID']."&infoOrderID=".$value['infoOrderID']."&prodID=".$value['prodID'] ?>" 
                                                           class="btn btn-cyan btn-sm" style="width:30px;">In</a>  
                                                </td>
                                                <td class="sorting_1"><?php echo $value['cliName'] ?></td>
                                                <td><?php echo $value['cliAddress'] ?></td>
                                                <td><?php echo $value['cliPhone'] ?></td>
                                                <td><?php echo $value['ordDate'] ?></td>
                                                <td><?php echo $value['prodName'] ?></td>
                                                <td><?php echo $value['infoOrderSL'] ?></td>
                                                <td><?php echo number_format($value['infoOrderPrice'])."đ"; ?></td>
                                                <td >
                                                    <div>
                                                        <div style="display:flex;">
                                                            <select id="selStatus<?php echo $value['ordID'] ?>" name="ordStatus" class=" form-control custom-select " style="width:120px;" >
                                                                <option <?php if($value['ordStatus'] == -1) echo "selected";  ?> value="-1">Chưa giao</option>
                                                                <option <?php if($value['ordStatus'] == 0) echo "selected";  ?>  value="0">Đang giao</option>
                                                                <option <?php if($value['ordStatus'] == 1) echo "selected";  ?>  value="1">Đã giao</option>
                                                            </select>
                                                            <button   onclick="loadDoc<?php echo $value['ordID'] ?>();" type="submit" style="margin-left: 10px;" class="btn btn-cyan btn-sm">Lưu</button>  
                                                        </div>

                                                        <script>
                                                            function loadDoc<?php echo $value['ordID'] ?>() {

                                                                // lấy dữ liệu trên select option
                                                                var status =  $('#selStatus<?php echo $value['ordID'] ?>').find(":selected").text();

                                                                const xhttp = new XMLHttpRequest();
                                                                xhttp.onreadystatechange = function() {
                                                                    if (this.readyState == 4 && this.status == 200) {
                                                                        alert(this.responseText);
                                                                    }
                                                                };

                                                                var url= "../api/suaDonHang.php?ordID=<?php echo $value['ordID']?>&sta="+status;
                                                                xhttp.open("GET", url , true);
                                                                xhttp.send();
                                                            }
                                                        </script>              
                                                    </div>
                                                   <!-- <form action="<?php echo $level.compPart."Order_Edit_process.php" ?>" method="POST">
                                                        <div style="display:flex;">
                                                            <select name="ordStatus" class=" form-control custom-select " style="width:120px;" >
                                                                <option <?php if($value['ordStatus'] == -1) echo "selected";  ?> value="-1">Chưa giao</option>
                                                                <option <?php if($value['ordStatus'] == 0) echo "selected";  ?>  value="0">Đang giao</option>
                                                                <option <?php if($value['ordStatus'] == 1) echo "selected";  ?>  value="1">Đã giao</option>
                                                            </select>
                                                            <button type="submit" style="margin-left: 10px;" class="btn btn-cyan btn-sm">Lưu</button>  
                                                        </div>
                                                        <input style="display:none;" type="text" name="ordID" value ="<?php echo $value['ordID'] ?>">               
                                                   </form> -->
                                                </td>
                                            </tr>
                                         <?php } ?>
                                    </tbody>

                                    <tfoot>
                                        <tr>
                                            <th class="sorting"  rowspan="1" colspan="1"
                                                style="width: 76.6667px;">In</th>    
                                            <th class="sorting_asc"  rowspan="1"  colspan="1"  
                                                style="width: 126.333px;">Tên người mua</th>
                                            <th class="sorting"  rowspan="1" colspan="1" 
                                                style="width: 207.667px;">Địa chỉ</th>
                                            <th class="sorting"  rowspan="1" colspan="1"
                                                style="width: 90.3333px;">Số điện thoại</th>
                                            <th class="sorting"  rowspan="1" colspan="1"
                                                style="width: 37px;">Ngày mua </th>
                                            <th class="sorting"  rowspan="1" colspan="1"
                                                style="width: 37px;">Tên sản phẩm</th>    
                                            <th class="sorting"  rowspan="1" colspan="1"
                                                style="width: 20px;"> Số lượng</th>
                                            <th class="sorting"  rowspan="1" colspan="1"
                                                style="width: 76.6667px;">Giá</th>
                                            <th class="sorting"  rowspan="1" colspan="1"
                                                style="width: 76.6667px;">Trạng thái</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <!-- <div class="col-sm-12 col-md-5">
                                <div class="dataTables_info" id="zero_config_info" role="status" aria-live="polite">Showing 1 to
                                    10 of 57 entries</div>
                            </div> -->
                            <!-- <div class="col-sm-12 col-md-7">
                                <div style="display: flex; justify-content: flex-end;" class="dataTables_paginate paging_simple_numbers" id="zero_config_paginate">
                                    <ul class="pagination">
                                        <li class="paginate_button page-item previous disabled" id="zero_config_previous"><a
                                                href="#" aria-controls="zero_config" data-dt-idx="0" tabindex="0"
                                                class="page-link">Previous</a></li>
                                        <li class="paginate_button page-item active"><a href="#" aria-controls="zero_config"
                                                data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                        <li class="paginate_button page-item "><a href="#" aria-controls="zero_config"
                                                data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                                        <li class="paginate_button page-item "><a href="#" aria-controls="zero_config"
                                                data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                                        <li class="paginate_button page-item "><a href="#" aria-controls="zero_config"
                                                data-dt-idx="4" tabindex="0" class="page-link">4</a></li>
                                        <li class="paginate_button page-item "><a href="#" aria-controls="zero_config"
                                                data-dt-idx="5" tabindex="0" class="page-link">5</a></li>
                                        <li class="paginate_button page-item "><a href="#" aria-controls="zero_config"
                                                data-dt-idx="6" tabindex="0" class="page-link">6</a></li>
                                        <li class="paginate_button page-item next" id="zero_config_next"><a href="#"
                                                aria-controls="zero_config" data-dt-idx="7" tabindex="0"
                                                class="page-link">Next</a></li>
                                    </ul>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
        
            </div>
        </div>