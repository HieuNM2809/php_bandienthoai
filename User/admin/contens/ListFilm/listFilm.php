
       <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <form action="" method="get" class="row w-100" >
                    <div class="col-3">
                        <div id="zero_config_filter" class="dataTables_filter" style="margin: auto;">
                            <label style="display: flex;">
                            <button type="button" class="btn btn-cyan btn-sm">Tên</button>  
                                <input  name="keyName" style="width: 100%;  font-size: medium;border-color: blueviolet;"
                                    class="form-control form-control-sm">                 
                            </label>
                        </div>
                    </div>
                    <div class="col-3">
                        <div id="zero_config_filter" class="dataTables_filter" style="margin: auto;">
                        <label style="display: flex;">
                            <button type="button" class="btn btn-cyan btn-sm">Giá dưới</button>  
                                <input type="number"  name="keyPrice" style="width: 100%;  font-size: medium;border-color: blueviolet;"
                                    class="form-control form-control-sm">                 
                            </label>
                        </div>
                    </div>
                    <div class="col-3">
                        <div id="zero_config_filter" class="dataTables_filter" style="margin: auto;">
                            <label style="display: flex;">
                            <button type="button" class="btn btn-cyan btn-sm">Năm Sản xuất</button>  
                                <input  name="keyYear" style="width: 100%;  font-size: medium;border-color: blueviolet;"
                                    class="form-control form-control-sm">                 
                            </label>
                        </div>
                    </div>
                    <div class="col-3">
                        <button type="submit" style="font-style:italic;width: 50%;height: 80%;font-size:15px;font-weight: bold;" class="btn btn-cyan btn-sm">Tìm kiếm</button>  
                    </div>
                </form>
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
                                        <span class="text-muted" style="height: 40px;display:block;overflow:hidden;">
                                            <?php echo $value['prodDescription'] ?>
                                        </span><br/>
                                        <span class="text-muted">
                                           Giá: <?php echo number_format($value['prodPrice'])." đ";?>    
                                        </span><br/>
                                        Năm phát hành: <?php echo $value['prodReleaseYear'] ?>
                                    </div>
                                    <div class="el-card-content" style="margin-top: 10px;">
                                        <button type="button" class="btn btn-cyan btn-sm">
                                           <a style="color:white" href="<?php echo $level.pages_Part."EditOrder.php?id_prod=".$value["prodID"]?>"  >Sửa</a>    
                                        </button>
                                        <button type="button" class="btn btn-danger btn-sm">
                                             <a style="color:white" href="<?php echo $level.compPart."Product_Delete.php?id_prod=".$value["prodID"]?>"  >Xóa</a>
                                        </button>
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
        