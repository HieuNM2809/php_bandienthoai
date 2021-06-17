    <!-- Open Content -->
    <?php
        require_once($level."api/chitietsanpham_pro.php");
    ?>
    <section class="bg-light">
        <div class="container pb-5">
            <?php foreach($sanpham as $key){?>
            <div class="row">
                <div class="col-lg-5 mt-5">
                    <!-- <div class="card mb-3"> -->
                    <img class="card-img img-fluid" src="<?php echo $level.img_path.$key['img1'];?>"
                        alt="Card image cap" id="product-detail" style="width:100%; height:100%;">
                    <!-- </div> -->
                </div>
                <!-- col end -->
                <div class="col-lg-7 mt-5">
                    <form action="<?php echo $level."pages/cart.php";?>" method="get">
                        <div class="card">
                            <div class="card-body">
                                <h1 class="h2"><?php echo $key['prodName'];?></h1>
                                <p class="h3 py-2"><?php echo number_format($key['prodPrice']).$key['prodInit'];?></p>
                                <p class="py-2">
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-secondary"></i>
                                </p>
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <h6>Hãng:</h6>
                                    </li>
                                    <li class="list-inline-item">
                                        <p class="text-muted"><strong>Iphone</strong></p>
                                    </li>
                                </ul>

                                <h6>Mô tả:</h6>
                                <p><?php echo $key['prodDescription'];?></p>
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <h6>Số Lượng:</h6>
                                    </li>
                                    <li class="list-inline-item">
                                        <input type="number" name="soluong" value="1" style="width:4vw;">
                                    </li>
                                </ul>
                                <input type="hidden" name="product-title" value="Activewear">
                                <div class="row">
                                    <div class="col-auto">
                                        <ul class="list-inline pb-3">
                                            <li class="list-inline-item">Màu :
                                                <input type="hidden" name="product-size" id="product-size" value="S">
                                            </li>
                                            <li class="list-inline-item"><span class="btn btn-warning btn-size"></span>
                                            </li>
                                            <li class="list-inline-item"><span
                                                    class="btn btn-secondary btn-size"></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row pb-3">
                                    <div class="col d-grid">
                                        <a type="submit" class="btn btn-success btn-lg" name="submit" value="buy"
                                            href="<?php echo $level."pages/MuaHang.php";?>">Tiếp Tục Mua Hàng</a>
                                    </div>
                                    <div class="col d-grid">
                                        <input type="hidden" name="id" value="<?php echo $key['prodID'];?>">
                                        <button type="submit" class="btn btn-success btn-lg" name="">MUA
                                            NGAY</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
            <?php }?>
        </div>
    </section>
    <!-- Close Content -->