      <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row">
                <div class=" col-md-6">  
                </div>
                <div class="col-sm-12 col-md-6">
                    <div id="zero_config_filter" class="dataTables_filter">
                        <label style="display: flex;">
                            <button type="button" class="btn btn-cyan btn-sm">Search</button>                   
                            <input style="width: 100%; margin-left: 10px;" type="search"
                                class="form-control form-control-sm" placeholder=""
                                aria-controls="zero_config">
                        </label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">   
                        <div class="row comment-widgets scrollable">
                           <?php foreach( $listClient as $value){
                           ?>
                                <!-- Comment Row -->
                               <div class="col-6">
                                   <div class="d-flex flex-row comment-row m-t-0">
                                        <div class="comment-text w-100">
                                            Tên : <h6 class="font-medium"><?php echo $value["cliName"] ?></h6>
                                            Địa chỉ: <span class="m-b-15 d-block font-medium"><?php echo $value["cliAddress"] ?></span>
                                            Mã Bưu Điện:<span class="m-b-15 d-block font-medium font-medium"><?php echo $value["cliPostOfficeCode"] ?></span>
                                            Số điện thoại:<span class="m-b-15 d-block font-medium"><?php echo $value["cliPhone"] ?></span>    
                                            <div class="comment-footer mt-3" >
                                                
                                                <button type="button" class="btn btn-cyan btn-sm">Edit</button>
                                                <button type="button" class="btn btn-danger btn-sm">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                               </div>
                          <?php } ?>
                        </div>
                    </div>  
                </div>
            </div>