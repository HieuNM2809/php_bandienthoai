
<style>
  .hover_controll:hover{
      background:#a99191;
      border-radius:10px;
  }
  .hover_controll:hover >a {
      color:white;
  }
  .hover_controll >a{
      color:red;
  }
</style>   
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row">
    <div class=" col-md-6">  
    </div>
    <div class="col-sm-12 col-md-6">
        <div id="zero_config_filter" class="dataTables_filter">
            <label style="display: flex;">
                <button type="button" class="btn btn-cyan btn-sm">Tìm kiếm</button>                   
                <input style="width: 100%; margin-left: 10px;" type="search"
                    class="form-control form-control-sm" placeholder=""
                    aria-controls="zero_config">
            </label>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card">   
            <div class="row comment-widgets scrollable">
                <table class="table table-hover ml-3 mr-3">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên đầy đủ</th>
                        <th>Tên</th>
                        <th>Địa chỉ </th>
                        <th>Mã bưu điện</th>
                        <th>Thành phố</th>
                        <th>Số điện thoại</th>
                        <th>Miêu tả</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php foreach( $listProvided as $value){
                        ?>
                            <tr>
                                <th><?php echo $value['provID'] ?></th>
                                <th><?php echo $value['provFullName'] ?></th>
                                <th><?php echo $value['provName'] ?></th>
                                <th><?php echo $value['provAddress'] ?></th>
                                <th><?php echo $value['provPostOfficeCode'] ?></th>
                                <th><?php echo $value['provCountry'] ?></th>
                                <th><?php echo $value['provPhone'] ?></th>
                                <th><?php echo $value['provDescription'] ?></th>
                                <th class="hover_controll" >
                                    <a  href="<?php echo $level.pages_Part."EditProvided.php?id_prov=".$value['provID']; ?>">Sửa</a>
                                </th>
                                <th class="hover_controll" >
                                    <a  href="<?php echo $level.compPart."Provided_Delete.php?id_prov=".$value['provID']; ?>">Xóa</a>
                                </th>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>  
    </div>
    
</div>