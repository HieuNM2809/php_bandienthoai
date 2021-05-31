<!--================Cart Area =================-->
<?php
//Kiểm tra biến SESSION có tồn tại không
    require_once("../api/add_to_cart.php");
    $total=0; 
?>
<section class="cart_area section_padding">
    <div class="container">
        <div class="cart_inner">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Sản Phẩm</th>
                            <th scope="col">Giá</th>
                            <th scope="col">Số Lượng</th>
                            <th scope="col">Tổng Tiền</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                         foreach( $_SESSION['cart'] as $item){?>
                        <tr>
                            <td>
                                <div class="media">
                                    <div class="d-flex">
                                        <img src="<?php $level.img_path.$item['img'];?>" alt=""
                                            style="width: 100%; height: 100%;">
                                    </div>
                                    <div class="media-body">
                                        <p><?php echo $item['name'];?></p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <h5><?php echo number_format($item['dongia'],0)."VND";?></h5>
                            </td>
                            <td>
                                <div class="product_count">
                                    <span class="input-number-decrement"> <i class="ti-minus"></i></span>
                                    <?php echo $item['soluong'];?>
                                    <span class="input-number-increment"> <i class="ti-plus"></i></span>
                                </div>
                            </td>
                            <td>
                                <h5>
                                    <?php   
                                   echo number_format($item['soluong']*$item['dongia'],0)."VND";?></h5>
                            </td>
                        </tr>
                        <?php
                            $total+=$item['soluong']*$item['dongia'];
                        }?>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>
                                <h5>Tổng Tiền:</h5>
                            </td>
                            <td>
                                <h5><?php echo number_format($total,0)."VND";?></h5>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="checkout_btn_inner float-right">
                    <a class="btn_1" href="<?php echo $level."pages/MuaHang.php";?>">Tiếp Tục Mua Hàng</a>
                    <a class="btn_1 checkout_btn_1" href="<?php echo $level."api/delcart.php";?>">Thanh
                        Toán</a>
                </div>
            </div>
        </div>
</section>
<!--================End Cart Area =================-->
</main>