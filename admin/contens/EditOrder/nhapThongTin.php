<?php require_once ( $level."comp/Product_Create_Data.php"); ?>
<?php require_once ( $level."comp/Product_Edit_Data.php"); ?>
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <form action="<?php echo $level."comp/Product_Edit_process.php"?>"  method="POST" enctype="multipart/form-data" class="form-horizontal">
                                <div class="card-body">
                                    <h4 class="Radio Buttonscard-title">Thông tin dơn nhập</h4>
                                    <div class="form-group row" style="display:none;" >
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">ID</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="prodID"  value="<?php echo $prod[0]['prodID'] ?>"    >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Tên</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="prodName" required value="<?php echo $prod[0]['prodName'] ?>"    >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Giá</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" name="prodPrice" required   value="<?php echo $prod[0]['prodPrice'] ?>"      >
                                        </div>  
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Số lượng</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" name="prodSL" required   value="<?php echo $prod[0]['prodSL'] ?>"     >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Năm phát hành</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" name="prodReleaseYear"   value="<?php echo $prod[0]['prodReleaseYear'] ?>"     >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Miêu tả</label>
                                        <div class="col-sm-9">
                                            <textarea name="prodDescription"   value="<?php echo $prod[0]['prodDescription'] ?>"      class="form-control"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label style="text-align: right;" class="col-md-3 m-t-15">Danh mục</label>
                                        <div class="col-md-9">
                                            <select name="catID" class="select2 form-control custom-select" required style="width: 100%; height:36px;">
                                                <option  <?php if($prod[0]['catID'] == 1) echo "selected";    ?>  value="1">Điện thoại Phím</option>
                                                <option <?php if($prod[0]['catID'] == 2) echo "selected";   ?>  value="2">Điện thoại Cảm ứng</option>
                                                <option <?php if($prod[0]['catID'] == 3) echo "selected";   ?>  value="3">Điện thoại Gaming</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label style="text-align: right;" class="col-md-3 m-t-15">Nhà cung cấp</label>
                                        <div class="col-md-9">
                                            <select name="provID" class="select2 form-control custom-select" required style="width: 100%; height:36px;">
                                                <?php foreach( $lstProv as $value){
                                                ?>
                                                    <option  <?php if($prod[0]['provID'] == $value['provID']) echo "selected";    ?> value="<?php echo $value['provID'] ?>"><?php echo $value['provName'] ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label  style="text-align: end;" class="col-md-3">Chọn hình</label>
                                        <div class="col-md-9">
                                            <div class="custom-file">
                                                <input type="file" name="img"  required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Màu</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="color" required placeholder="Màu">
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" class="btn btn-success">Sửa</button>
                                        <button type="reset" class="btn btn-primary">Xóa dữ liệu trên form</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                      