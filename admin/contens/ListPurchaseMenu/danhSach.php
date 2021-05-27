<?php
  $danhSachThongKe = array(
     array(   "Name" =>"Airi Satou", 
              "Position" =>"Accountant", 
              "Office" =>"Tokyo", 
              "Age" =>"33", 
              "Startdate" =>"2008/11/28", 
              "Salary" =>"$162,700", 
    ),          
     array(   "Name" =>"Airi Satou", 
               "Position" =>"Accountant", 
               "Office" =>"Tokyo", 
               "Age" =>"33", 
               "Startdate" =>"2008/11/28", 
               "Salary" =>"$162,700", 
        )   
                    
   );                            
?>
        <!-- ============================================================== -->
        <!-- Charts pages  -->
        <!-- ============================================================== -->
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <div id="zero_config_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                        <div class="row">
                              <div class="col-12 d-flex no-block align-items-center">
                                <div id="zero_config_filter" class="dataTables_filter" style="margin: auto;">
                                    <label style="display: flex;">
                                        <input style="width: 100%; margin-left: 10px; font-size: medium;border-color: blueviolet;" type="search"
                                            class="form-control form-control-sm" placeholder=""
                                            aria-controls="zero_config">
                                        <button type="button" class="btn btn-cyan btn-sm">Search</button>                   
                                    </label>
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
                                                Name</th>
                                            <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1"
                                                aria-label="Position: activate to sort column ascending"
                                                style="width: 207.667px;">Position</th>
                                            <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1"
                                                aria-label="Office: activate to sort column ascending"
                                                style="width: 90.3333px;">Office</th>
                                            <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1"
                                                aria-label="Age: activate to sort column ascending" style="width: 37px;">Age
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1"
                                                aria-label="Start date: activate to sort column ascending" style="width: 79px;">
                                                Start date</th>
                                            <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1"
                                                aria-label="Salary: activate to sort column ascending"
                                                style="width: 76.6667px;">Salary</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                         foreach( $danhSachThongKe as $value){
                                        ?>
                                            <tr role="row" class="odd">
                                                <td class="sorting_1"><?php echo $value["Name"] ?></td>
                                                <td><?php echo $value["Position"] ?></td>
                                                <td><?php echo $value["Office"] ?></td>
                                                <td><?php echo $value["Age"] ?></td>
                                                <td><?php echo $value["Startdate"] ?></td>
                                                <td><?php echo $value["Salary"] ?></td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td class="sorting_1"><?php echo $value["Name"] ?></td>
                                                <td><?php echo $value["Position"] ?></td>
                                                <td><?php echo $value["Office"] ?></td>
                                                <td><?php echo $value["Age"] ?></td>
                                                <td><?php echo $value["Startdate"] ?></td>
                                                <td><?php echo $value["Salary"] ?></td>
                                            </tr>
                                       <?php } ?>
                                    </tbody>

                                    <tfoot>
                                        <tr>
                                            <th rowspan="1" colspan="1">Name</th>
                                            <th rowspan="1" colspan="1">Position</th>
                                            <th rowspan="1" colspan="1">Office</th>
                                            <th rowspan="1" colspan="1">Age</th>
                                            <th rowspan="1" colspan="1">Start date</th>
                                            <th rowspan="1" colspan="1">Salary</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-5">
                                <div class="dataTables_info" id="zero_config_info" role="status" aria-live="polite">Showing 1 to
                                    10 of 57 entries</div>
                            </div>
                            <div class="col-sm-12 col-md-7">
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
                            </div>
                        </div>
                    </div>
                </div>
        
            </div>
        </div>