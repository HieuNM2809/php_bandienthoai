<?php require_once ( $level."comp/Product_Create_Data.php"); ?>
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
                            <form action="<?php echo $level."comp/Product_Insert.php"?>"  method="POST" enctype="multipart/form-data" class="form-horizontal">
                                <div class="card-body">
                                    <h4 class="Radio Buttonscard-title">Thông tin đơn nhập</h4>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Tên</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="prodName" required placeholder="Tên sản phẩm">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Giá</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" name="prodPrice" min="1" required placeholder="Giá">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Số lượng</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" name="prodSL" min="1" required placeholder="Số lượng">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Năm phát hành</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" name="prodReleaseYear" min="1" placeholder="Năm phát hành">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Miêu tả</label>
                                        <div class="col-sm-9">
                                            <textarea name="prodDescription" class="form-control"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label style="text-align: right;" class="col-md-3 m-t-15">Danh mục</label>
                                        <div class="col-md-9">
                                            <select name="catID" class="select2 form-control custom-select" required style="width: 100%; height:36px;">
                                                <option value="1">Điện thoại Phím</option>
                                                <option value="2">Điện thoại Cảm ứng</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label style="text-align: right;" class="col-md-3 m-t-15">Nhà cung cấp</label>
                                        <div class="col-md-9">
                                            <select name="provID" class="select2 form-control custom-select" required style="width: 100%; height:36px;">
                                                <?php foreach( $lstProv as $value){
                                                ?>
                                                    <option value="<?php echo $value['provID'] ?>"><?php echo $value['provName'] ?></option>
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
                                        <button type="submit" class="btn btn-success">Thêm</button>
                                        <button type="reset" class="btn btn-primary">Xóa dữ liệu trên form</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                      