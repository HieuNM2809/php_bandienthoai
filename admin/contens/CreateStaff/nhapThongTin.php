
       <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <form action="<?php echo $level."comp/insertStaff.php"?>"  method="POST" enctype="multipart/form-data"  class="form-horizontal">
                            <div class="card-body">
                                <h4 class="Radio Buttonscard-title">Thông tin cá nhân</h4>
                                <div class="form-group row" style="display:none;">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">ID</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" value="<?php echo $maxId[0][0]; ?>"  name="sID" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Tên đăng nhập</label>
                                    <div class="col-sm-9">
                                        <input id="txtUser" type="text" onkeyup="checkUser();" class="form-control" name="suserLogin"  autocomplete="off" required placeholder="VD: user123">
                                        <div id="messageUser" style="color:red;"></div> 
                                   </div>
                                </div>
                                <script>
                                    function checkUser(){
                                        var us = $('#txtUser').val();

                                        const xhttp = new XMLHttpRequest();
                                        xhttp.onreadystatechange = function() {
                                            if (this.readyState == 4 && this.status == 200) {
                                            document.getElementById("messageUser").innerHTML = this.responseText;
                                            }
                                        };
                                        var url = "../api/checkUser.php?us="+us;
                                        xhttp.open("GET", url);
                                        xhttp.send();
                                    }
                                </script>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Mật khẩu đăng nhập</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="spass"  autocomplete="off"  required placeholder="VD: pass123">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Tên</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="sname" required placeholder="VD: Nguyễn Văn A">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 text-right control-label col-form-label">Ngày sinh</label>
                                    <div class="col-sm-9 input-group">
                                        <input type="text" name="sdate" class="form-control mydatepicker" required placeholder="yyyy-MM-dd">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                        </div>
                                    </div>
                               </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Địa Chỉ</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="saddress" required placeholder="VD: 123, Nguyễn Phúc Chu, P.15,Q.TB,TP.HCM">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label  style="text-align:end;" class="col-md-3">Hình ảnh</label>
                                    <div class="col-md-9">
                                        <div class="custom-file">
                                            <input type="file"  name="simage" required>
                                            <!-- <label class="custom-file-label" for="validatedCustomFile">Choose file...</label> --> 
                                            <!-- <div class="invalid-feedback">Example invalid custom file feedback</div> --> 
                                        </div>
                                    </div>
                                </div> 
                                <div class="form-group row">
                                    <label for="lname" class="col-sm-3 text-right control-label col-form-label">Số điện thoại</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="sphone" required placeholder="VD:0799501324"Ư>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label style="text-align: end;" class="col-sm-3">Giới tính</label>
                                    <div class="col-sm-9">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" checked class="custom-control-input" id="customControlValidation1" name="sSex" value="1" required>
                                            <label class="custom-control-label" for="customControlValidation1">Nam</label>
                                        </div>
                                         <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="customControlValidation2" name="sSex" value="0" required>
                                            <label class="custom-control-label" for="customControlValidation2">Nữ</label>
                                        </div>
                                         
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email1" class="col-sm-3 text-right control-label col-form-label">Lương</label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" id="email1" min="1" required name="ssalary" placeholder="VD:10.000.000">
                                    </div>
                                </div>
                                <div class="form-group row">
                                        <label style="text-align: right;" class="col-md-3 m-t-15">Vị trí</label>
                                        <div class="col-md-9">
                                            <select class="select2 form-control custom-select" name="sposition" style="width: 100%; height:36px;">
                                                <option value="GD">Giám đốc</option>
                                                <option value="NV">Nhân viên</option>
                                            </select>
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label for="cono1"  class="col-sm-3 text-right control-label col-form-label">Miêu tả</label>
                                    <div class="col-sm-9" >
                                        <textarea class="form-control" name="sDescription"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="border-top">
                                <div class="card-body">
                                    <button type="submit"  class="btn btn-success">Thêm</button>
                                    <button type="reset" class="btn btn-primary">Xóa dữ liệu trên form</button>
                                </div>
                            </div>
                        </form>
                    </div>
              