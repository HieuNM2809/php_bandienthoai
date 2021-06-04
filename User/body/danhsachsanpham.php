<!-- Start Danh Sách Sản Phẩm -->
<div class="container py-5">
    <div class="row">
        <div class="col-lg-3">
            <h1 class="h2 pb-4">Phân Lọai</h1>
            <ul class="list-unstyled templatemo-accordion">
                <li class="pb-3">
                    <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                        Loại
                        <i class="fa fa-fw fa-chevron-circle-down mt-1"></i>
                    </a>
                    <ul class="collapse show list-unstyled pl-3">
                        <li><a class="text-decoration-none" href="<?php echo "?cat=2"?>">Cảm Ứng</a></li>
                        <li><a class="text-decoration-none" href="<?php echo "?cat=1"?>">Bàn Phím</a></li>
                        <li><a class="text-decoration-none" href="<?php echo "?cat=3"?>">Gamming</a></li>
                    </ul>
                </li>
                <li class="pb-3">
                    <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                        Giá
                        <i class="pull-right fa fa-fw fa-chevron-circle-down mt-1"></i>
                    </a>
                    <ul id="collapseTwo" class="collapse list-unstyled pl-3">
                        <li><a class="text-decoration-none" href="<?php echo "?price1=15000000"?>">Trên 15,000,000</a>
                        </li>
                        <li><a class="text-decoration-none" href="<?php echo "?price2=15000000"?>">Dưới 15,000,000</a>
                        </li>
                        <li><a class="text-decoration-none" href="<?php echo "?price3=1000000"?>">Dưới 1,000,000</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>

        <div class="col-lg-9">
            <div class="row">
                <div class="col-md-6">
                    <ul class="list-inline shop-top-menu pb-3 pt-1">
                        <li class="list-inline-item">
                            <a class="h3 text-dark text-decoration-none mr-3" href="<?php echo "?cat=0"?>">Tất Cả</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="h3 text-dark text-decoration-none mr-3" href="<?php echo "?cat=2"?>">Cảm Ứng</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="h3 text-dark text-decoration-none" href="<?php echo "?cat=1"?>">Bàn Phím</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="h3 text-dark text-decoration-none" href="<?php echo "?cat=3"?>">Gamming</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <form action="<?php echo $level."pages/MuaHang.php?search=";?>" method="GET">
                        <div class="form-group">
                            <input type="text" class="form-control" name="search" id="" aria-describedby="helpId"
                                placeholder="" style="width: 69%;">
                            <button type="submit" class="btn btn-primary"
                                style="bottom: 40px;left: 71%;">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <?php 
                require_once($level.api_path."phantrang.php");
                require_once($level.api_path."phanloai.php");
            ?>
            <div class="row">
                <?php foreach($lst_sp as $prod){ ?>
                <div class="col-md-4">
                    <div class="card mb-4 product-wap rounded-0">
                        <div class="card rounded-0">
                            <img class="card-img rounded-0 img-fluid"
                                src="<?php echo $level.img_path.$prod['prodImg'];?>">
                            <div
                                class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                <ul class="list-unstyled">
                                    <li><a class="btn btn-success text-white" href="#"><i class="far fa-heart"></i></a>
                                    </li>
                                    <li><a class="btn btn-success text-white mt-2" href="#"><i
                                                class="far fa-eye"></i></a></li>
                                    <li><a class="btn btn-success text-white mt-2"
                                            href="<?php echo $level."pages/cart.php?id=".$prod['prodID'];?>"><i
                                                class="fas fa-cart-plus"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <a href="<?php echo $level."pages/ChiTietSanPham.php?id=".$prod['prodID'];?>"
                                class="h3 text-decoration-none text-left"><b><?php echo $prod['prodName'];?></b></a>

                            <ul class="list-unstyled d-flex justify-content-left mb-1">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                </li>
                            </ul>
                            <p class="text-left text-success  mb-0">
                                <?php echo number_format($prod['prodPrice'],0).$prod['prodInit'];?></p>
                            <p class="card-text textline">
                                <?php echo $prod['prodDescription'];?>
                            </p>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
            <div div="row">
                <ul class="pagination pagination-lg justify-content-end">
                    <?php
                        for($i=1;$i<=$page;$i++){
                            if(isset($_GET['search']))
                            {
                                echo '<li class="page-item">
                                <a class="page-link rounded-0 shadow-sm border-top-0 border-left-0 text-dark" href="?page='.$i.'&search='.$search.'">'.$i.'</a>
                                 </li>';
                            }
                            else if(isset($_GET['cat']) && $_GET['cat']!=0)
                            {
                                echo '<li class="page-item">
                                <a class="page-link rounded-0 shadow-sm border-top-0 border-left-0 text-dark" href="?page='.$i.'&cat='.$cat.'">'.$i.'</a>
                                 </li>';
                            }
                            else if(isset($_GET['price1']) && $_GET['price1']!=0)
                            {
                                echo '<li class="page-item">
                                <a class="page-link rounded-0 shadow-sm border-top-0 border-left-0 text-dark" href="?page='.$i.'&price1='.$price.'">'.$i.'</a>
                                 </li>';
                            }
                            else if(isset($_GET['price2']) && $_GET['price2']!=0)
                            {
                                echo '<li class="page-item">
                                <a class="page-link rounded-0 shadow-sm border-top-0 border-left-0 text-dark" href="?page='.$i.'&price2='.$price.'">'.$i.'</a>
                                 </li>';
                            }
                            else if(isset($_GET['price3']) && $_GET['price3']!=0)
                            {
                                echo '<li class="page-item">
                                <a class="page-link rounded-0 shadow-sm border-top-0 border-left-0 text-dark" href="?page='.$i.'&price3='.$price.'">'.$i.'</a>
                                 </li>';
                            }
                            else if(isset($_GET['cat']) && isset($_GET['search']))
                            {
                                echo '<li class="page-item">
                                <a class="page-link rounded-0 shadow-sm border-top-0 border-left-0 text-dark" href="?page='.$i.'&cat='.$cat.'&search='.$search.'">'.$i.'</a>
                                 </li>';
                            }
                            else if(!isset($_GET['search']) && !isset($_GET['cat']) || $_GET['cat']==0)
                            {
                                echo '<li class="page-item">
                                <a class="page-link rounded-0 shadow-sm border-top-0 border-left-0 text-dark" href="?page='.$i. '">'.$i.'</a>
                                 </li>';
                            }
                    }?>
                </ul>
            </div>
        </div>

    </div>
</div>
<!-- End Danh Sách Sản Phẩm -->