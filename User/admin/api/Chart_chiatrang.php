<?php 
     $level ="../";
     require_once ($level."config.php");
     require_once ($level."lib/db.php");

    $strCharts = "select p.prodID, p.prodName, i.InfoOrderPrice, i.InfoOrderSL, o.ordDate
    from product p, information_order i, orderr o 
    where p.prodID = i.prodID and i.ordID = o.ordID
    group by p.prodID 
    limit ".$_GET['sta'].",5";
    //$param = []; array_push($param,$_GET['sta']);
    $lstCharts = DP::run_query($strCharts,[],2);
    
?>
<div class="card-body">
    <div class="table-responsive">
        <div id="zero_config_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">                       
            <div class="row mb-2">
                <div class="col-12 d-flex no-block align-items-center">
                    <div id="zero_config_filter" class="dataTables_filter" style="margin: auto;">
                        <form style="display: flex;">
                            <select name="chart_mou" class="select2 form-control custom-select" style="border-color:blueviolet;width: 15vw; height:36px;">
                                
                                <?php for($i = 1; $i<=12;$i++){
                                ?>
                                    <option value="<?php echo $i ?>">Tháng <?php echo $i ?> </option>
                                <?php } ?> 
                            </select>
                            <input name="chart_Yea" type="number" style="width: 30%;  font-size: medium;border-color: blueviolet;"
                                class="form-control form-control-sm" placeholder="Năm">
                            <button type="submit" class="btn btn-cyan btn-sm">Tìm kiếm</button>                   
                        </form>
                    </div>
                    <div id="zero_config_filter" class="dataTables_filter" style=" margin-left: 30px;">
                        <form style="display: flex;">
                            <select name="chart_Quy" class="select2 form-control custom-select" style="border-color:blueviolet;width: 15vw; height:36px;">
                                
                                <?php for($i = 1; $i<=4;$i++){
                                ?>
                                    <option value="<?php echo $i ?>">Quý <?php echo $i ?> </option>
                                <?php } ?> 
                                <input name="chart_Yea" type="number" style="width: 30%; font-size: medium;border-color: blueviolet;"
                                class="form-control form-control-sm" placeholder="Năm">
                            </select>
                            <button type="submit" class="btn btn-cyan btn-sm">Tìm kiếm</button>                   
                        </form>
                    </div>
                    <div id="zero_config_filter" class="dataTables_filter" style=" margin-left: 30px;">
                        <form style="display: flex;">
                            <input name="chart_Year" type="number" style="width: 100%; margin-left: 10px; font-size: medium;border-color: blueviolet;"
                                class="form-control form-control-sm" placeholder="Năm">
                            <button type="submit" class="btn btn-cyan btn-sm">Tìm kiếm</button>                   
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <table id="zero_config" class="table table-striped table-bordered dataTable" role="grid"
                        aria-describedby="zero_config_info">
                        <thead>
                            <tr role="row">
                                <th class="sorting_asc"  rowspan="1"colspan="1" style="width: 50.333px;"> ID</th>
                                <th class="sorting_asc"  rowspan="1" colspan="1" style="width: 200.333px;">Tên</th>
                                <th class="sorting"  rowspan="1" colspan="1"  style="width: 100.667px;">Giá</th>
                                <th class="sorting"  rowspan="1" colspan="1" style="width: 90.3333px;">Số lượng</th>
                                <th class="sorting"  rowspan="1" colspan="1" style="width: 100px;">Ngày bán</th>
                                <th class="sorting"  rowspan="1" colspan="1" style="width: 37px;">Thành tiền</th>
                            </tr>
                        </thead>
                        <tbody >
                            <?php
                                foreach( $lstCharts as $value){
                            ?>
                                <tr role="row" class="even">
                                    <td><?php echo $value["prodID"] ?></td>
                                    <td><?php echo $value["prodName"] ?></td>
                                    <td><?php echo number_format($value["InfoOrderPrice"])."đ"; ?></td>
                                    <td><?php echo $value["InfoOrderSL"] ?></td>
                                    <td><?php echo $value["ordDate"] ?></td>
                                    <td><?php echo number_format($value["InfoOrderSL"]*$value["InfoOrderPrice"])." đ"; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                        <tfoot>
                            <tr role="row">
                                <th class="sorting_asc"rowspan="1"colspan="1" style="width: 50.333px;"> ID</th>
                                <th class="sorting_asc"  rowspan="1" colspan="1" style="width: 200.333px;">Tên</th>
                                <th class="sorting"  rowspan="1" colspan="1"  style="width: 100.667px;">Giá</th>
                                <th class="sorting"  rowspan="1" colspan="1" style="width: 90.3333px;">Số lượng</th>
                                <th class="sorting"  rowspan="1" colspan="1" style="width: 100px;">Ngày bán</th>
                                <th class="sorting"  rowspan="1" colspan="1" style="width: 37px;">Thành tiền</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row mb-3">
    <div class="col-12 d-flex">
            <ul class="pagination " style="margin:auto;">
                <?php  for( $i=0 ; $i< $_GET['sumRow'] ;$i++){
                ?>
                    <li  onclick="
                       page('<?php echo $i*5; ?>','<?php echo $_GET['sumRow']; ?>', '<?php echo $i?>');"
                        class="page-item page-link <?php if($_GET['check']==$i) echo " activePage"?>">
                        <?php echo $i+1; ?>
                    </li>
                <?php } ?>
            </ul>
    </div>
</div>