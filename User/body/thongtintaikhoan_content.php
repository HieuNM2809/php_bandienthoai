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
                            <input class="form-control" type="text" name="hoten"
                                value="<?php echo $user[0]['cliName'];?>" placeholder="Họ và Tên...">
                        </div>
                        <div class="form-group" style="padding-bottom:1vw;">
                            <label for="" style="padding-bottom:1vw;">Địa chỉ</label>
                            <input class="form-control" type="text" name="diachi"
                                value="<?php echo $user[0]['cliAddress'];?>" placeholder="Địa chỉ...">
                        </div>
                        <div class="form-group" style="padding-bottom:1vw;">
                            <label for="" style="padding-bottom:1vw;">Thành phố</label>
                            <input class="form-control" type="text" name="thanhpho"
                                value="<?php echo $user[0]['cliCountry'];?>" placeholder="Thành phố...">

                        </div>
                        <div class="form-group" style="padding-bottom:1vw;">
                            <label for="" style="padding-bottom:1vw;">Số điện thoại</label>
                            <input class="form-control" type="text" name="sdt"
                                value="<?php echo $user[0]['cliPhone'];?>" placeholder="Số điện thoại...">
                        </div>
                        <input type="hidden" name="action" value="update">
                        <button type="submit" name="submit" class="btn btn-success form-control p-3"
                            style="margin-top:1vw; margin-bottom:2vw;">Cập Nhật
                        </button>

                        <!-- <input type="hidden" name="event" value="save">
                        <button type="submit" name="sent" class="btn btn-success form-control p-3"
                            style="margin-top:1vw; margin-bottom:2vw;">Lưu thông tin
                        </button> -->
                    </form>

                    <!-- <a href="#" class="btn btn-success form-control p-3"
                        style="margin-top:1vw; margin-bottom:2vw;">Lưu Thông
                        Tin</a> -->

                </div>
            </div>
        </div>
    </section>
    <!--================login_part end =================-->
</main>