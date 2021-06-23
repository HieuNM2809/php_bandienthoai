<?php
    $user=(isset($_SESSION['user']))?$user=$_SESSION['user']:[];
    
?>
<!-- Start Top Nav -->
<nav class="navbar navbar-expand-lg bg-dark navbar-light d-none d-lg-block" id="templatemo_nav_top">
    <div class="container text-light">
        <div class="w-100 d-flex justify-content-between">
            <div>
                <i class="fa fa-envelope mx-2"></i>
                <a class="navbar-sm-brand text-light text-decoration-none"
                    href="mailto:OneWeek@company.vn">OneWeek@company.vn</a>
                <i class="fa fa-phone mx-2"></i>
                <a class="navbar-sm-brand text-light text-decoration-none"
                 href="tel:070-375-xxxx">070375XXXX</a>
                 <i class="fas fa-user-lock mx-2"></i>
                 <a class="navbar-sm-brand text-light text-decoration-none"
                 href="<?php echo $level."admin/";?>">Admin</a>
            </div>
            <div>
                <a class="text-light" href="https://www.facebook.com/laihong.khai.5" target="_blank" rel="sponsored"><i
                        class="fab fa-facebook-f fa-sm fa-fw me-2"></i></a>
                <a class="text-light" href="https://www.instagram.com/" target="_blank"><i
                        class="fab fa-instagram fa-sm fa-fw me-2"></i></a>
                <a class="text-light" href="https://twitter.com/" target="_blank"><i
                        class="fab fa-twitter fa-sm fa-fw me-2"></i></a>
                <a class="text-light" href="https://www.linkedin.com/" target="_blank"><i
                        class="fab fa-linkedin fa-sm fa-fw"></i></a>
            </div>
        </div>
    </div>
</nav>
<!-- Close Top Nav -->
<!-- Header -->
<nav class="navbar navbar-expand-lg navbar-light shadow">
    <div class="container d-flex justify-content-between align-items-center">

        <a class="navbar-brand text-success logo h1 align-self-center" href="index.html">
            <img src="<?php echo $level.img_path."OneWeek.png";?>" alt="" style="width:40%;">
        </a>

        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
            data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between"
            id="templatemo_main_nav">
            <div class="flex-fill">
                <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $level."index.php";?>">Trang Chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $level."pages/ThongTin.php";?>">Thông Tin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $level."pages/MuaHang.php";?>">Mua Hàng</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $level."pages/LienHe.php";?>">Liên Hệ</a>
                    </li>
                </ul>
            </div>
            <div class="navbar align-self-center d-flex">
                <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
                    <div class="input-group">
                        <input type="text" class="form-control" id="inputMobileSearch" placeholder="Search ...">
                        <div class="input-group-text">
                            <i class="fa fa-fw fa-search"></i>
                        </div>
                    </div>
                </div>
                <a class="nav-icon position-relative text-decoration-none" href="#">
                    <i class="fa fa-fw fa-cart-arrow-down text-dark mr-1"></i>
                </a>
                <?php if(isset($user[0]['cliUser'])){?>
                <div class="dropdown">
                    <a class="btn btn-success dropdown-toggle w-3 text-white" data-toggle="dropdown">
                        <?php echo $user[0]['cliUser'];?>
                    </a>
                    <div class="dropdown-menu btn-success">
                        <a class="nav-link text-white"
                            href="<?php echo $level.pages_path."thongtintaikhoan.php";?>">Quản Lí Tài Khoản</a>
                        <a class="nav-link text-white" href="<?php echo $level.pages_path."cart.php";?>">Giỏ Hàng</a>
                        <a class="nav-link text-white" href="<?php echo $level.api_path."logout.php";?>">Đăng Xuất</a>
                    </div>
                </div>
                <?php }
                else{?>
                <a class="btn btn-success nav-link text-white"
                    href="<?php echo $level.pages_path."DangNhap.php";?>">Đăng Nhập</a>
                <?php }?>
            </div>
        </div>
    </div>
</nav>
<!-- Close Header -->

<!-- Modal -->
<!-- <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="w-100 pt-1 mb-5 text-right">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="" method="get" class="modal-content modal-body border-0 p-0">
            <div class="input-group mb-2">
                <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                <button type="submit" class="input-group-text bg-success text-light">
                    <i class="fa fa-fw fa-search text-white"></i>
                </button>
            </div>
        </form>
    </div>
</div> -->