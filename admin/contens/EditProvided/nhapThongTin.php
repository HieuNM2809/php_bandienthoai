<?php  require_once ($level.compPart."Provided_Edit_Data.php")  ?> 
<style>
.form-control{
    border: 1px solid #616a73;
}
</style>
       <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <form action="<?php echo $level.compPart."provided_Edit_process.php" ?>"  method="POST" class="form-horizontal">
                            <div class="card-body">
                                <h4 class="Radio Buttonscard-title">Thông tin nhà cung cấp</h4>
                                <div class="form-group row" style="display:none;" >
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">ID</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control"   name="provID" value="<?php echo $prov[0]['provID'] ?>"   >
                                    </div>
                                </div>
                                <div class="form-group row" >
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Tên đầy đủ nhà cung cấp</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control"   name="provFullName"  value="<?php echo $prov[0]['provFullName'] ?>"   >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Tên nhà cung cấp</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="provName" required  value="<?php echo $prov[0]['provName'] ?>"   >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Địa chỉ</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="provAddress" required  value="<?php echo $prov[0]['provAddress'] ?>"   >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Mã bưu điện</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="provPostOfficeCode" required   value="<?php echo $prov[0]['provPostOfficeCode'] ?>"   >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Thành phố</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="provCountry" required  value="<?php echo $prov[0]['provCountry'] ?>"  >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Số điện thoại</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="provPhone" required  value="<?php echo $prov[0]['provPhone'] ?>"  >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Miêu tả</label>
                                    <div class="col-sm-9">
                                        <textarea  name="provDescription"  cols="95" rows="5" value="<?php echo $prov[0]['provDescription'] ?>"  ></textarea>
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
              