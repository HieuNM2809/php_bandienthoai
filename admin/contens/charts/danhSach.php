
        <!-- ============================================================== -->
        <!-- Charts pages  -->
        <!-- ============================================================== -->
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <div id="zero_config_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="dataTables_length" id="zero_config_length">
                                    <label style="display: flex;">Thống kê
                                        <select name="zero_config_length" style="width: auto; margin: 0 10px;"
                                            aria-controls="zero_config" class="form-control form-control-sm">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                        </select>
                                        <select name="zero_config_length_init" style="width: auto; margin: 0 10px;font-weight: bold;"
                                            aria-controls="zero_config" class="form-control form-control-sm">
                                            <option value="date">ngày</option>
                                            <option value="week">tuần</option>
                                            <option value="month">tháng</option>
                                            <option value="year">năm</option>               
                                        </select>

                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div id="zero_config_filter" class="dataTables_filter">
                                    <label style="display: flex;">Search:<input style="width: 100%; margin-left: 10px;" type="search"
                                            class="form-control form-control-sm" placeholder=""
                                            aria-controls="zero_config"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="zero_config" class="table table-striped table-bordered dataTable" role="grid"
                                    aria-describedby="zero_config_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="zero_config" rowspan="1"
                                                colspan="1" aria-sort="ascending"
                                                aria-label="Name: activate to sort column descending" style="width: 126.333px;">
                                                ID</th>
                                            <th class="sorting_asc" tabindex="0" aria-controls="zero_config" rowspan="1"
                                                colspan="1" aria-sort="ascending"
                                                aria-label="Name: activate to sort column descending" style="width: 126.333px;">
                                                Tên</th>
                                            <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1"
                                                aria-label="Position: activate to sort column ascending"
                                                style="width: 207.667px;">Giá</th>
                                            <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1"
                                                aria-label="Office: activate to sort column ascending"
                                                style="width: 90.3333px;">Trạng thái</th>
                                            <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1"
                                                aria-label="Age: activate to sort column ascending" style="width: 37px;">Năm phát hành
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1"
                                                aria-label="Age: activate to sort column ascending" style="width: 37px;">Số lượng bán được
                                            </th>
                                            
                                          
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
                                                <td><?php echo $value["prodPrice"] ?></td>
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
                                        <tr>
                                            <th rowspan="1" colspan="1">ID</th>
                                            <th rowspan="1" colspan="1">Tên</th>
                                            <th rowspan="1" colspan="1">Giá</th>
                                            <th rowspan="1" colspan="1">Trạng thái</th>
                                            <th rowspan="1" colspan="1">Năm phát hành</th>
                                            <th rowspan="1" colspan="1">Số lượng bán được</th>
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
                                                class="page-link <?php if(isset($_GET['pageCharts']) && $_GET['pageCharts'] <= 1){ echo "disable";} ?>">Previous</a></li>
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
                                                class="page-link <?php if(isset($_GET['pageCharts']) && $_GET['pageCharts'] >= 4){ echo "disable";} ?>">Next</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        
            </div>
        </div>