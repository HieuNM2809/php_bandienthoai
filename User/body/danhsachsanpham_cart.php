<!--================Cart Area =================-->
<?php   
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
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                         foreach( $_SESSION['cart'] as $item){?>
                        <tr>
                            <form action="<?php echo $level."pages/cart.php";?>" method="get">
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
                                    <h5><?php echo number_format($item['dongia'],0)."VND";?></h5>
                                </td>
                                <td>

                                    <input type="number" name="soluong" id="" value="<?php echo $item['soluong'];?>"
                                        style="width:4vw;">
                                </td>
                                <td>
                                    <h5>
                                        <?php   
                                   echo number_format($item['soluong']*$item['dongia'],0)."VND";?></h5>
                                </td>
                                <td>
                                    <a href="" style="color:black;">Xóa</a>
                                </td>
                                <td>
                                    <input type="hidden" name="action" value="update">
                                    <input type="hidden" name="id" value="<?php echo $item['id'];?>">
                                    <a href="" style="color:black;">Cập nhật</a>
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
                                <h5>Tổng Tiền:</h5>
                            </td>
                            <td>
                                <h5><?php echo number_format($total,0)."VND";?></h5>
                            </td>
                            <td></td>
                            <td></td>
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