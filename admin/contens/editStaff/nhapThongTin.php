<?php   require_once ($level."comp/Data_Edit_Staff.php") ?> 
       <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <form action="<?php echo $level."comp/process_Edit_Staff.php"?>"  method="POST" enctype="multipart/form-data"  class="form-horizontal">
                            <div class="card-body">
                                <h4 class="Radio Buttonscard-title">Thông tin cá nhân</h4>
                                <div class="form-group row" >
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">ID</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control"  value="<?php echo $staff[0]['staID'] ?>"  name="sID" required>
                                    </div>
                                </div>
                                 <div class="form-group row" >
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">ID Login</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control"  value="<?php echo $_GET['id_Login'] ?>"  name="sID_Login" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Tên đăng nhập</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="suserLogin" value="<?php echo $staff_Login[0]['LoginUserName'] ?>" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Mật khẩu đăng nhập</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="spass" value="<?php echo $staff_Login[0]['LoginPassword'] ?>" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Tên</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="sname" value="<?php echo $staff[0]['staName'] ?>"  >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 text-right control-label col-form-label">Ngày sinh</label>
                                    <div class="col-sm-9 input-group">
                                        <input type="text" name="sdate" class="form-control mydatepicker"  value="<?php echo $staff[0]['staBirthday'] ?>"  >
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                        </div>
                                    </div>
                               </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Địa Chỉ</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="saddress" required   value="<?php echo $staff[0]['staAddress'] ?>"  >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label  style="text-align:end;" class="col-md-3">Hình ảnh</label>
                                    <div class="col-md-9">
                                        <div class="custom-file">
                                            <input type="file"  name="simage" required>
                                        </div>
                                    </div>
                                </div> 
                                <div class="form-group row">
                                    <label for="lname" class="col-sm-3 text-right control-label col-form-label">Số điện thoại</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="sphone" required value="<?php echo $staff[0]['staPhone'] ?>"   >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label style="text-align: end;" class="col-sm-3">Giới tính</label>
                                    <div class="col-sm-9">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" <?php if($staff[0]['staBirthday']== true) echo "checked"; ?> class="custom-control-input" id="customControlValidation1" name="sSex" value="1" required>
                                            <label class="custom-control-label" for="customControlValidation1">Nam</label>
                                        </div>
                                         <div class="custom-control custom-radio">
                                            <input type="radio"  <?php if($staff[0]['staBirthday']== false) echo "checked"; ?> class="custom-control-input" id="customControlValidation2" name="sSex" value="0" required>
                                            <label class="custom-control-label" for="customControlValidation2">Nữ</label>
                                        </div>
                                         
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email1" class="col-sm-3 text-right control-label col-form-label">Lương</label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" id="email1" required name="ssalary" value="<?php echo $staff[0]['staSalary'] ?>" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                        <label style="text-align: right;" class="col-md-3 m-t-15">Vị trí</label>
                                        <div class="col-md-9">
                                            <select class="select2 form-control custom-select" name="sposition" style="width: 100%; height:36px;">
                                                <option <?php if($staff[0]['staPosition']== "Giám đốc") echo "selected"; ?> value="GD">Giám đốc</option>
                                                <option <?php if($staff[0]['staPosition']== "Nhân Viên") echo "selected"; ?> value="NV">Nhân viên</option>
                                            </select>
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label for="cono1"  class="col-sm-3 text-right control-label col-form-label">Miêu tả</label>
                                    <div class="col-sm-9" >
                                        <textarea class="form-control" name="sDescription"  value="<?php echo $staff[0]['staDescription'] ?>"   ></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="border-top">
                                <div class="card-body">
                                    <button type="submit"  class="btn btn-success">Save</button>
                                    <button type="reset" class="btn btn-primary">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
              