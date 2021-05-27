
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
                           <?php foreach( $listStaff as $value){
                           ?>
                                <!-- Comment Row -->
                               <div class="col-6">
                                   <div class="d-flex flex-row comment-row m-t-0">
                                        <div class="comment-text w-50">
                                            Tên : <h6 class="font-medium"><?php echo $value["staName"] ?></h6>
                                            Ngày sinh: <span class="m-b-15 d-block text-medium font-medium"><?php $value["staBirthday"];?></span> 
                                            Địa chỉ:<span class="m-b-15 d-block font-medium font-medium"><?php echo $value["staAddress"] ?></span>
                                            Số điện thoại:<span class="m-b-15 d-block font-medium"><?php echo $value["staPhone"] ?></span>
                                            Giới tính: <span class="m-b-15 d-block font-medium">
                                                 <?php  if($value["staSex"] ==1 ) {echo "Nam";}else{ echo "Nữ";}
                                                 ?>
                                            </span>
                                            Lương:<span class="m-b-15 d-block font-medium"><?php echo $value["staSalary"] ?></span>
                                            Vị trí: <span class="m-b-15 d-block font-medium"><?php echo $value["staPosition"] ?></span>
                                            Miêu tả: <span class="m-b-15 d-block font-medium"><?php echo $value["staDescription"] ?></span>
                                            
                                            <div class="comment-footer mt-3" >
                                                <button type="button" class="btn btn-cyan btn-sm">
                                                    <a style= "color:white;" href="<?php echo $level.pages_Part."EditStaff.php?id=".$value["staID"]."&id_Login=".$value["LoginID"];?>">Edit</a>
                                                </button>
                                                <button type="button" class="btn btn-danger btn-sm">
                                                    <a  style= "color:white;" href="<?php echo $level.compPart."deleteStaff.php?id=".$value["staID"]."&id_Login=".$value["LoginID"]; ?>">Delete</a>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="comment-text w-50">
                                            <div style="width: 100%; height:100%;overflow:hiden;">
                                                 <img style="width: 100%;height: 70%;background-position:center;" src="<?php echo $level.imagesUsers_Part.$value['staImg']?>" alt="avata">
                                            </div>
                                        </div>
                                    </div>
                               </div>
                          <?php } ?>
                        </div>
                    </div>  
                </div>
                
            </div>