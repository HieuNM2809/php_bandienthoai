 <?php  require_once($level.compPart."Chart_Search.php"); ?>
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
                                        <select name="chart_mou" class="select2 form-control custom-select" style="border-color:blueviolet;width: 15vw; height:36px;">
                                         
                                            <?php for($i = 1; $i<=12;$i++){
                                            ?>
                                              <option value="<?php echo $i ?>">Tháng <?php echo $i ?> </option>
                                            <?php } ?> 
                                        </select>
                                        <input name="chart_Yea" type="number" style="width: 30%;  font-size: medium;border-color: blueviolet;"
                                            class="form-control form-control-sm" placeholder="Năm">
                                        <button type="submit" class="btn btn-cyan btn-sm">Tìm kiếm</button>                   
                                    </form>
                                </div>
                                <div id="zero_config_filter" class="dataTables_filter" style=" margin-left: 30px;">
                                    <form style="display: flex;">
                                        <select name="chart_Quy" class="select2 form-control custom-select" style="border-color:blueviolet;width: 15vw; height:36px;">
                                         
                                            <?php for($i = 1; $i<=4;$i++){
                                            ?>
                                              <option value="<?php echo $i ?>">Quý <?php echo $i ?> </option>
                                            <?php } ?> 
                                            <input name="chart_Yea" type="number" style="width: 30%; font-size: medium;border-color: blueviolet;"
                                            class="form-control form-control-sm" placeholder="Năm">
                                        </select>
                                        <button type="submit" class="btn btn-cyan btn-sm">Tìm kiếm</button>                   
                                    </form>
                                </div>
                                <div id="zero_config_filter" class="dataTables_filter" style=" margin-left: 30px;">
                                    <form style="display: flex;">
                                       <input name="chart_Year" type="number" style="width: 100%; margin-left: 10px; font-size: medium;border-color: blueviolet;"
                                            class="form-control form-control-sm" placeholder="Năm">
                                        <button type="submit" class="btn btn-cyan btn-sm">Tìm kiếm</button>                   
                                    </form>
                                </div>
                                <!-- <div id="zero_config_filter" class="dataTables_filter" style="margin: auto;">
                                    <form style="display: flex;">
                                        <button style="height:36px;" type="submit" class="btn btn-cyan btn-sm">Xem tất cả</button>                   
                                    </form>
                                </div> -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="zero_config" class="table table-striped table-bordered dataTable" role="grid"
                                    aria-describedby="zero_config_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting_asc"  rowspan="1"colspan="1" style="width: 50.333px;"> ID</th>
                                            <th class="sorting_asc"  rowspan="1" colspan="1" style="width: 200.333px;">Tên</th>
                                            <th class="sorting"  rowspan="1" colspan="1"  style="width: 100.667px;">Giá</th>
                                            <th class="sorting"  rowspan="1" colspan="1" style="width: 90.3333px;">Số lượng</th>
                                            <th class="sorting"  rowspan="1" colspan="1" style="width: 100px;">Ngày bán</th>
                                            <th class="sorting"  rowspan="1" colspan="1" style="width: 37px;">Thành tiền</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                         foreach( $lstCharts as $value){
                                        ?>
                                            <tr role="row" class="even">
                                                <td><?php echo $value["prodID"] ?></td>
                                                <td><?php echo $value["prodName"] ?></td>
                                                <td><?php echo number_format($value["InfoOrderPrice"])."đ"; ?></td>
                                                <td><?php echo $value["InfoOrderSL"] ?></td>
                                                <td><?php echo $value["ordDate"] ?></td>
                                                <td><?php echo number_format($value["InfoOrderSL"]*$value["InfoOrderPrice"])." đ"; ?></td>
                                            </tr>
                                       <?php } ?>
                                    </tbody>
                                    <tfoot>
                                        <tr role="row">
                                            <th class="sorting_asc"rowspan="1"colspan="1" style="width: 50.333px;"> ID</th>
                                            <th class="sorting_asc"  rowspan="1" colspan="1" style="width: 200.333px;">Tên</th>
                                            <th class="sorting"  rowspan="1" colspan="1"  style="width: 100.667px;">Giá</th>
                                            <th class="sorting"  rowspan="1" colspan="1" style="width: 90.3333px;">Số lượng</th>
                                            <th class="sorting"  rowspan="1" colspan="1" style="width: 100px;">Ngày bán</th>
                                            <th class="sorting"  rowspan="1" colspan="1" style="width: 37px;">Thành tiền</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
        
            </div>
        </div>









     <!-- Chia trang rồi  -->
        <!-- <div class="row">
            <div class="col-sm-12">
                <table id="zero_config" class="table table-striped table-bordered dataTable" role="grid"
                    aria-describedby="zero_config_info">
                    <thead>
                        <tr role="row">
                            <th class="sorting_asc"rowspan="1"colspan="1" style="width: 126.333px;"> ID</th>
                            <th class="sorting_asc"  rowspan="1" colspan="1" style="width: 126.333px;">Tên</th>
                            <th class="sorting"  rowspan="1" colspan="1"  style="width: 207.667px;">Giá</th>
                            <th class="sorting"  rowspan="1" colspan="1" style="width: 90.3333px;">Số lượng</th>
                            <th class="sorting"  rowspan="1" colspan="1" style="width: 37px;">Ngày bán</th>
                            <th class="sorting"  rowspan="1" colspan="1" style="width: 37px;">Thành tiền</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 0;
                        if(count($lstCharts) == 0 ){echo "<h4>Không có sản phẩm nào !!!!";};
                            foreach( $lstCharts as $value){
                                if( $i == 0 ){
                        ?>
                            <tr role="row" class="odd">
                                <td><?php echo $value["prodID"] ?></td>
                                <td class="sorting_1"><?php echo $value["prodName"] ?></td>
                                <td><?php echo number_format($value["prodPrice"])." đ"; ?></td>
                                <td><?php echo $value["prodStatus"] ?></td>
                                <td><?php echo $value["prodReleaseYear"] ?></td>
                                <td><?php echo $value["infoOrderSL"] ?></td>
                            </tr>
                            <?php
                                $i ==1;}else {
                            ?>                    
                            <tr role="row" class="even">
                                <td><?php echo $value["prodID"] ?></td>
                                <td class="sorting_1"><?php echo $value["prodName"] ?></td>
                                <td><?php echo $value["prodPrice"] ?></td>
                                <td><?php echo $value["prodStatus"] ?></td>
                                <td><?php echo $value["prodReleaseYear"] ?></td>
                                <td><?php echo $value["infoOrderSL"] ?></td>
                            </tr>
                        <?php $i==0; }} ?>
                    </tbody>

                    <tfoot>
                        <tr role="row">
                            <th class="sorting_asc"rowspan="1"colspan="1" style="width: 126.333px;"> ID</th>
                            <th class="sorting_asc"  rowspan="1" colspan="1" style="width: 126.333px;">Tên</th>
                            <th class="sorting"  rowspan="1" colspan="1"  style="width: 207.667px;">Giá</th>
                            <th class="sorting"  rowspan="1" colspan="1" style="width: 90.3333px;">Số lượng</th>
                            <th class="sorting"  rowspan="1" colspan="1" style="width: 37px;">Ngày bán</th>
                            <th class="sorting"  rowspan="1" colspan="1" style="width: 37px;">Thành tiền</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-5">
                <div class="dataTables_info" id="zero_config_info" role="status" aria-live="polite"></div>
            </div>
            <div class="col-sm-12 col-md-7">
                <div style="display: flex; justify-content: flex-end;" class="dataTables_paginate paging_simple_numbers" id="zero_config_paginate">
                    <ul class="pagination">
                        <li class="paginate_button page-item previous " id="zero_config_previous"><a
                                href="<?php $i =1; if(isset($_GET['pageCharts'])) {echo "Charts.php?pageCharts=".$_GET['pageCharts']-1; }else {echo "Charts.php?pageCharts=".$i-1;}?>" aria-controls="zero_config" data-dt-idx="0" tabindex="0"
                                class="page-link <?php if(isset($_GET['pageCharts']) && $_GET['pageCharts'] <= 1){ echo "disable";} ?>">Trước</a></li>
                        <li class="paginate_button page-item <?php if(isset($_GET['pageCharts'])) { if($_GET['pageCharts'] == 1){ echo "active";}}?>"><a href="Charts.php?pageCharts=1" aria-controls="zero_config"
                                data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                        <li class="paginate_button page-item <?php if(isset($_GET['pageCharts'])) { if($_GET['pageCharts'] == 2){ echo "active";}} ?>"><a href="Charts.php?pageCharts=2" aria-controls="zero_config"
                                data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                        <li class="paginate_button page-item <?php if(isset($_GET['pageCharts'])) { if($_GET['pageCharts'] == 3){ echo "active";}} ?>"><a href="Charts.php?pageCharts=3" aria-controls="zero_config"
                                data-dt-idx="3" tabindex="0"  class="page-link">3</a></li>
                        <li class="paginate_button page-item <?php if(isset($_GET['pageCharts'])) { if($_GET['pageCharts'] == 4){ echo "active";}} ?>"><a href="Charts.php?pageCharts=4" aria-controls="zero_config"
                                data-dt-idx="4" tabindex="0" class="page-link">4</a></li>
                        
                        <li class="paginate_button page-item next" id="zero_config_next">
                        <a href="<?php $i =1; if(isset($_GET['pageCharts'])) {echo "Charts.php?pageCharts=".$_GET['pageCharts']+1; }else {echo "Charts.php?pageCharts=".$i+1;}?>"
                                aria-controls="zero_config" data-dt-idx="7" tabindex="0"
                                class="page-link <?php if(isset($_GET['pageCharts']) && $_GET['pageCharts'] >= 4){ echo "disable";} ?>">Tiếp</a></li>
                    </ul>
                </div>
            </div>
        </div>         -->