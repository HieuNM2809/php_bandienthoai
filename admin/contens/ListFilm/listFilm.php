
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
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row el-element-overlay">
                    <?php foreach( $lstFilm as $value){
                    ?>
                        <div class="col-lg-3 col-md-6">
                            <div class="card">
                                <div class="el-card-item">
                                    <div class="el-card-avatar el-overlay-1"> 
                                        <img style="height:200px;background-positon:center;" src="<?php echo $level.imagesProduct_Part.$value['img1']?>" alt="user" />
                                        <div class="el-overlay">
                                            <ul class="list-style-none el-info">
                                                <li class="el-item"><a class="btn default btn-outline el-link" href="javascript:void(0);"><i class="mdi mdi-link"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="el-card-content">
                                        <h4 class="m-b-0"><?php echo $value['prodName'] ?></h4>
                                        <span class="text-muted">
                                            <?php echo $value['prodDescription'] ?>
                                        </span><br/>
                                        <span class="text-muted">
                                           Giá: <?php echo $value['prodPrice']?>    
                                        </span><br/>
                                        Năm phát hành: <?php echo $value['prodReleaseYear'] ?>
                                    </div>
                                    <div class="el-card-content" style="margin-top: 10px;">
                                        <button type="button" class="btn btn-cyan btn-sm">Edit</button>
                                        <button type="button" class="btn btn-success btn-sm">Pause</button>
                                        <button type="button" class="btn btn-danger btn-sm">Delete</button>
                                    </div>
                                
                                </div>
                            </div>
                        </div>
                    <?php } ?>
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
        