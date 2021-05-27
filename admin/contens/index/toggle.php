    
                        <!-- toggle part -->
                        <div id="accordian-4">
                            <div class="card m-t-30">
                                <a class="card-header link" data-toggle="collapse" data-parent="#accordian-4" href="#Toggle-1" aria-expanded="true" aria-controls="Toggle-1">
                                    <i class="seticon fa fa-arrow-right" aria-hidden="true"></i>
                                    <span style="font-size:20px">Các sản phẩm bán chạy trong tháng</span>
                                </a>
                                <div id="Toggle-1" class="collapse show multi-collapse">
                                    <div class="card-body widget-content">
                                        <div class="row el-element-overlay">
                                            <?php foreach( $lstProductHot as $value){
                                            ?>
                                                <div class="col-lg-3 col-md-6">
                                                    <div class="card">
                                                        <div class="el-card-item">
                                                            <div class="el-card-avatar el-overlay-1"> <img src="<?php echo $level.imagesProduct_Part.$value['img1']?>" alt="user" />
                                                                <div class="el-overlay">
                                                                    <ul class="list-style-none el-info">
                                                                        <li class="el-item"><a class="btn default btn-outline el-link" href="javascript:void(0);"><i class="mdi mdi-link"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="el-card-content">
                                                                <h4 class="m-b-0"><?php echo $value['prodName'] ?></h4>
                                                                <span class="text-dark">
                                                                  Số lượng bán được : <?php echo $value['infoOrderSL'] ?>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                                <a class="card-header link border-top" data-toggle="collapse" data-parent="#accordian-4" href="#Toggle-2" aria-expanded="false" aria-controls="Toggle-2">
                                    <i class="seticon fa fa-times" aria-hidden="true"></i>
                                    <span  style="font-size:20px">Sản phẩm ít người mua</span>
                                </a>
                                <div id="Toggle-2" class="multi-collapse collapse" style="">
                                    <div class="card-body widget-content">
                                        <div class="row el-element-overlay">
                                            <?php foreach( $lstProductLess as $value){
                                            ?>
                                                <div class="col-lg-3 col-md-6">
                                                    <div class="card">
                                                        <div class="el-card-item">
                                                            <div class="el-card-avatar el-overlay-1"> <img src="<?php echo $level.imagesProduct_Part.$value['img1']?>" alt="user" />
                                                                <div class="el-overlay">
                                                                    <ul class="list-style-none el-info">
                                                                        <li class="el-item"><a class="btn default btn-outline el-link" href="javascript:void(0);"><i class="mdi mdi-link"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="el-card-content">
                                                                <h4 class="m-b-0"><?php echo $value['prodName'] ?></h4>
                                                                <span class="text-dark">
                                                                  Số lượng bán được : <?php echo $value['infoOrderSL'] ?>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                       
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->