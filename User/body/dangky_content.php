<main>
    <!-- Hero Area Start-->
    <div class="slider-area ">
        <div class="single-slider slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>Đăng Ký</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Area End-->
    <!--================login_part Area =================-->
    <section class="login_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12">
                    <form action="" method="post">
                        <div class="form-group" style="padding-bottom:1vw;">
                            <label for="" style="padding-bottom:1vw;">Họ và Tên</label>
                            <input class="form-control" type="text" name="hoten" 2 placeholder="Họ và Tên...">
                            <div class="err" style="color:red;">
                                <span><?php if(isset($err['hoten']))
                                {
                                    echo $err['hoten'];
                                 }
                                 else
                                 {
                                     echo " ";
                                 } ?></span>
                            </div>
                        </div>
                        <div class="form-group" style="padding-bottom:1vw;">
                            <label for="" style="padding-bottom:1vw;">Địa chỉ</label>
                            <input class="form-control" type="text" name="diachi" placeholder="Địa chỉ...">
                            <div class="err" style="color:red;">
                                <span><?php if(isset($err['diachi']))
                                {
                                    echo $err['diachi'];
                                 }
                                 else
                                 {
                                     echo " ";
                                 } ?></span>
                            </div>
                        </div>
                        <div class="form-group" style="padding-bottom:1vw;">
                            <label for="" style="padding-bottom:1vw;">Thành phố</label>
                            <input class="form-control" type="text" name="thanhpho" placeholder="Thành phố...">
                            <div class="err" style="color:red;">
                                <span><?php if(isset($err['thanhpho']))
                                {
                                    echo $err['thanhpho'];
                                 }
                                 else
                                 {
                                     echo " ";
                                 } ?></span>
                            </div>
                        </div>
                        <div class="form-group" style="padding-bottom:1vw;">
                            <label for="" style="padding-bottom:1vw;">Số điện thoại</label>
                            <input class="form-control" type="text" name="sdt" placeholder="Số điện thoại...">
                            <div class="err" style="color:red;">
                                <span><?php if(isset($err['sdt']))
                                {
                                    echo $err['sdt'];
                                 }
                                 else
                                 {
                                     echo " ";
                                 } ?></span>
                            </div>
                        </div>
                        <div class="form-group" style="padding-bottom:1vw;">
                            <label for="" style="padding-bottom:1vw;">Tài Khoản</label>
                            <input class="form-control" type="text" name="taikhoan" placeholder="Tài khoản...">
                            <div class="err" style="color:red;">
                                <span><?php if(isset($err['taikhoan']))
                                {
                                    echo $err['taikhoan'];
                                 }
                                 else
                                 {
                                     echo " ";
                                 } ?></span>
                            </div>
                        </div>
                        <div class="form-group" style="padding-bottom:1vw;">
                            <label for="" style="padding-bottom:1vw;">Mật khẩu</label>
                            <input class="form-control" type="password" name="matkhau" placeholder="Mật Khẩu...">
                            <div class="err" style="color:red;">
                                <span><?php if(isset($err['matkhau']))
                                {
                                    echo $err['matkhau'];
                                 }
                                 else
                                 {
                                     echo " ";
                                 } ?></span>
                            </div>
                        </div>
                        <div class="form-group" style="padding-bottom:1vw;">
                            <label for="" style="padding-bottom:1vw;">Nhập lại mật khẩu</label>
                            <input class="form-control" type="password" name="nhaplaimatkhau"
                                placeholder="Nhập lại mật khẩu...">
                        </div>
                        <button type="submit" name="submit" class="btn btn-success form-control p-3"
                            style="margin-top:1vw; margin-bottom:2vw;">Đăng Kí</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--================login_part end =================-->
</main>