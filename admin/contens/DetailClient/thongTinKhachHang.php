<?php   require_once ($level.compPart."Client_Detail_Data.php") ?> 
<div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <form class="form-horizontal">
                            <div class="card-body">
                                <h4 class="Radio Buttonscard-title">Thông tin cá nhân khác hàng</h4>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">ID</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control"  disabled  value="<?php echo $cli[0]['cliID'] ?>"  >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="lname" class="col-sm-3 text-right control-label col-form-label">Họ và Tên</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control"   disabled  value="<?php echo $cli[0]['cliName'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="lname" class="col-sm-3 text-right control-label col-form-label">Địa chỉ</label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" disabled  value="<?php echo $cli[0]['cliAddress'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email1" class="col-sm-3 text-right control-label col-form-label">Thành phố sống</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control"  disabled  value="<?php echo $cli[0]['cliCountry'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Mã bưu điện</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control"  disabled  value="<?php echo $cli[0]['cliPostOfficeCode'] ?>">
                                    </div>
                                </div> <div class="form-group row">
                                    <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Số điện thoại</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control"  disabled  value="<?php echo $cli[0]['cliPhone'] ?>">
                                    </div>
                                </div> <div class="form-group row">
                                    <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Tên đăng nhập</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control"  disabled  value="<?php echo $cli[0]['cliUser'] ?>">
                                    </div>
                                </div> <div class="form-group row">
                                    <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Mật khẩu</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control"  disabled  value="<?php echo $cli[0]['cliPass'] ?>">
                                    </div>
                                </div>
                                <!-- <div class="form-group row">
                                    <label style="text-align: end;" class="col-sm-3">Radio Buttons</label>
                                    <div class="col-sm-9">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="customControlValidation1" name="radio-stacked" required>
                                            <label class="custom-control-label" for="customControlValidation1">First One</label>
                                        </div>
                                         <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="customControlValidation2" name="radio-stacked" required>
                                            <label class="custom-control-label" for="customControlValidation2">Second One</label>
                                        </div>
                                         <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="customControlValidation3" name="radio-stacked" required>
                                            <label class="custom-control-label" for="customControlValidation3">Third One</label>
                                        </div>
                                    </div>
                                </div> 
                                <div class="form-group row">
                                    <label style="text-align: end;" class="col-md-3">Checkboxes</label>
                                    <div class="col-md-9">
                                        <div class="custom-control custom-checkbox mr-sm-2">
                                            <input type="checkbox" class="custom-control-input" id="customControlAutosizing1">
                                            <label class="custom-control-label" for="customControlAutosizing1">First One</label>
                                        </div>
                                        <div class="custom-control custom-checkbox mr-sm-2">
                                            <input type="checkbox" class="custom-control-input" id="customControlAutosizing2">
                                            <label class="custom-control-label" for="customControlAutosizing2">Second One</label>
                                        </div>
                                        <div class="custom-control custom-checkbox mr-sm-2">
                                            <input type="checkbox" class="custom-control-input" id="customControlAutosizing3">
                                            <label class="custom-control-label" for="customControlAutosizing3">Third One</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label  style="text-align: end;" class="col-md-3">File Upload</label>
                                    <div class="col-md-9">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                                            <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                            <div class="invalid-feedback">Example invalid custom file feedback</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 text-right control-label col-form-label">Datepicker</label>
                                    <div class="col-sm-9 input-group">
                                        <input type="text" class="form-control mydatepicker" placeholder="mm/dd/yyyy">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                        </div>
                                    </div>
                               </div>
                                <div class="form-group row">
                                    <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Message</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control"></textarea>
                                    </div>
                                </div>

                               

                            </div> -->
                            <!-- <div class="border-top">
                                <div class="card-body">
                                    <button type="submit" class="btn btn-success">Save</button>
                                    <button type="reset" class="btn btn-primary">Reset</button>
                                </div>
                            </div> -->
                        </form>
                    </div>
                  