<!--================Cart Area =================-->
<?php   
    $total=0; 
    $cart=(isset($_SESSION['cart']))?$_SESSION['cart']:[];
?>
<section class="cart_area section_padding">
    <div class="container">
        <div class="cart_inner">
            <?php if($cart==[]){?>
            <div class="err text-center">
                <h2>Không có sản phẩm nào trong giỏ hàng</h2>
            </div>
            <?php }else{?>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Hình
                                Ảnh</th>
                            <th scope="col" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Sản
                                Phẩm</th>
                            <th scope="col" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Giá
                            </th>
                            <th scope="col" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Số
                                Lượng</th>
                            <th scope="col" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Tổng
                                Tiền</th>
                            <th scope="col" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach($cart as $item){?>
                        <tr>
                            <form action="<?php echo $level."pages/cart.php";?>" method="get">
                                <td>
                                    <img src="<?php echo $level.img_path.$item['img'];?>" alt=""
                                        style="width:10vw; height:10vw">
                                </td>
                                <td>
                                    <div class="media">
                                        <div class="d-flex">
                                        </div>
                                        <div class="media-body">
                                            <p><?php echo $item['name'];?></p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <h5 style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
                                        <?php echo number_format($item['dongia'],0)." VND";?></h5>
                                </td>
                                <td>

                                    <input type="number" name="soluong" id="" value="<?php echo $item['soluong'];?>"
                                        style="width:4vw;">
                                </td>
                                <td>
                                    <h5 style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
                                        <?php   
                                    echo number_format($item['soluong']*$item['dongia'],0)." VND";?></h5>
                                </td>
                                <td>
                                    <a href="<?php echo $level."pages/cart.php?id=".$item['id']."&action=delete";?>"
                                        class="btn btn-success">Xóa</a>
                                </td>
                                <td>
                                    <input type="hidden" name="action" value="update">
                                    <input type="hidden" name="id" value="<?php echo $item['id'];?>">
                                    <button type="submit" class="btn btn-success font-weight-normal">Cập nhật</button>
                                </td>
                            </form>
                        </tr>
                        <?php
                                $total+=$item['soluong']*$item['dongia'];
                            }?>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>
                                <h5 style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Tổng Tiền:
                                </h5>
                            </td>
                            <td>
                                <h5 style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
                                    <?php echo number_format($total,0)." VND";?></h5>
                            </td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
                <div class="checkout_btn_inner float-right" style="margin-left: 50vw;">
                    <a class="btn btn-success" href="<?php echo $level."pages/MuaHang.php";?>">Tiếp Tục Mua Hàng</a>
                    <a class="btn btn-success" href="<?php echo $level."pages/cart.php?action=insert";?>">Thanh
                        Toán</a>
                </div>
            </div>
            <?php require_once($level.api_path."thanhtoan.php");?>
            <?php }?>
        </div>
</section>
<!--================End Cart Area =================-->
</main>