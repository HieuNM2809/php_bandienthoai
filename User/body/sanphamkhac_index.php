<!-- Start Các Sản Phẩm Khác -->
<section class="container py-5">
    <div class="row text-center pt-3">
        <div class="col-lg-6 m-auto">
            <h1 class="h1 text-success">Các Sản Phẩm Khác</h1>
            <p>
                Thỏa sức lựa chọn các dòng điện thoại nổi bật nhất tại <b class="text-success">OneWeek</b>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-4 p-5 mt-3">
            <a><img src="<?php echo $level.img_path."10.jpg";?>" class="rounded-circle img-fluid border"></a>
            <h5 class="text-center mt-3 mb-3"></h5>
            <p class="text-center"><a class="btn btn-outline-success" href="<?php
                    if(isset($_SESSION['user']))
                    {
                        echo $level.pages_path."MuaHang.php";
                    }
                    else
                    {
                        echo $level.pages_path."DangNhap.php";
                    }
                    ?>">Mua
                    Hàng</a></p>
        </div>
        <div class="col-12 col-md-4 p-5 mt-3">
            <a href="#"><img src="<?php echo $level.img_path."3.png";?>" class="rounded-circle img-fluid border"></a>
            <h2 class="h5 text-center mt-3 mb-3"></h2>
            <p class="text-center"><a class="btn btn-outline-success" href="<?php
                    if(isset($_SESSION['user']))
                    {
                        echo $level.pages_path."MuaHang.php";
                    }
                    else
                    {
                        echo $level.pages_path."DangNhap.php";
                    }
                    ?>">Mua
                    Hàng</a></p>
        </div>
        <div class="col-12 col-md-4 p-5 mt-3">
            <a href="#"><img src="<?php echo $level.img_path."6.jpg";?>" class="rounded-circle img-fluid border"></a>
            <h2 class="h5 text-center mt-3 mb-3"></h2>
            <p class="text-center"><a class="btn btn-outline-success" href="<?php
                    if(isset($_SESSION['user']))
                    {
                        echo $level.pages_path."MuaHang.php";
                    }
                    else
                    {
                        echo $level.pages_path."DangNhap.php";
                    }
                    ?>">Mua
                    Hàng</a></p>
        </div>
    </div>
</section>
<!-- End các Sản Phẩm Khác -->