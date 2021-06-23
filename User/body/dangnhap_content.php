<main>
    <!-- Hero Area Start-->
    <div class="slider-area ">
        <div class="single-slider slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>Đăng Nhập</h2>
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
                <div class="col-lg-6 col-md-6 center">
                    <div class="login_part_form">
                        <div class="login_part_form_iner">
                            <h3>Chào mừng bạn đến với
                                <span class="text-success">OneWeek</span> !
                            </h3>
                            <form class="row contact_form" action="" method="post" novalidate="novalidate">
                                <div class="col-md-12 form-group p_star">
                                    <input type="text" class="form-control" name="taikhoan" value=""
                                        placeholder="Tài Khoản">
                                </div>
                                <div class="col-md-12 form-group p_star p-3">
                                    <input type="password" class="form-control" name="matkhau" value=""
                                        placeholder="Mật Khẩu">
                                </div>
                                <div class="col-md-12 form-group">
                                    <button type="submit" name="submit" value="submit"
                                        class="btn_3 bg-success text-white">
                                        Đăng Nhập
                                    </button>
                                    <div class="creat_account d-flex align-items-center">
                                        <a class="lost_pass" href="<?php echo $level.pages_path."DangKy.php";?>">Đăng Kí
                                            tài khoản</a>
                                        <!-- <a class="lost_pass" href="#" style="margin-left: 14vw;">Quên mật khẩu?</a> -->
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================login_part end =================-->
</main>