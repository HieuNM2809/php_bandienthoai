<?php   require_once ($level.compPart."Client_Detail_Data.php") ?> 
<div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <form   action="<?php echo $level.compPart."Client_Edit_process.php" ?>"  method="POST"  class="form-horizontal">
                            <div class="card-body">
                                <h4 class="Radio Buttonscard-title">Cập nhật thông tin khác hàng</h4>
                                <div class="form-group row" style="display:none;">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">ID</label>
                                    <div class="col-sm-9">
                                        <input  type="text" class="form-control"  name="cliID"   value="<?php echo $cli[0]['cliID'] ?>"  >
                                    </div>
                                </div><br/>
                                <div class="form-group row">
                                    <label for="lname" class="col-sm-3 text-right control-label col-form-label">Họ và Tên</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control"  name="cliName"    value="<?php echo $cli[0]['cliName'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="lname" class="col-sm-3 text-right control-label col-form-label">Địa chỉ</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control"  name="cliAddress"  value="<?php echo $cli[0]['cliAddress'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email1" class="col-sm-3 text-right control-label col-form-label">Thành phố sống</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="cliCountry"    value="<?php echo $cli[0]['cliCountry'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Mã bưu điện</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control"   name="cliPostOfficeCode"  value="<?php echo $cli[0]['cliPostOfficeCode'] ?>">
                                    </div>
                                </div> <div class="form-group row">
                                    <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Số điện thoại</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control"  name="cliPhone"   value="<?php echo $cli[0]['cliPhone'] ?>">
                                    </div>
                                </div> <div class="form-group row">
                                    <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Tên đăng nhập</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control"  name="cliUser"  value="<?php echo $cli[0]['cliUser'] ?>">
                                    </div>
                                </div> <div class="form-group row">
                                    <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Mật khẩu</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="cliPass"   value="<?php echo $cli[0]['cliPass'] ?>">
                                    </div>
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" class="btn btn-success">Save</button>
                                        <button type="reset" class="btn btn-primary">Reset</button>
                                    </div>
                                </div>
                        </form>
                    </div>