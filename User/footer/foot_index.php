<!-- Start Footer -->
<footer class="bg-dark" id="tempaltemo_footer">
    <div class="container">
        <div class="row">

            <div class="col-md-4 pt-5">
                <a class="navbar-brand text-success logo h1 align-self-center" href="<?php echo $level?>index.php"">
                    <img src="<?php echo $level.img_path."OneWeek2.png";?>" alt="" style="width:40%;">
                </a>
                <ul class="list-unstyled text-light footer-link-list">
                    <li>
                        <i class="fas fa-map-marker-alt fa-fw text-success "></i>
                        65 Huỳnh thúc Kháng,<br> P.Bến Nghé, Quận 1, TP.Hồ Chí
                        Minh</span>
                    </li>
                    <li>
                        <i class="fa fa-phone fa-fw text-success"></i>
                        <a class="text-decoration-none" href="tel:070-375-xxxx">070-375-XXXX</a>
                    </li>
                    <li>
                        <i class="fa fa-envelope fa-fw text-success"></i>
                        <a class="text-decoration-none" href="mailto:OneWeek@company.vn">OneWeek@company.vn</a>
                    </li>
                </ul>
            </div>

            <div class="col-md-4 pt-5">
                <h2 class="h2 text-light border-bottom pb-3 border-light">Sản Phẩm</h2>
                <ul class="list-unstyled text-light footer-link-list">
                    <li><a class="text-decoration-none" href="#">Phone</a></li>
                    <li><a class="text-decoration-none" href="#">Laptop</a></li>
                    <li><a class="text-decoration-none" href="#">tablet</a></li>
                </ul>
            </div>

            <div class="col-md-4 pt-5">
                <h2 class="h2 text-light border-bottom pb-3 border-light">Trang</h2>
                <ul class="list-unstyled text-light footer-link-list">
                    <li><a class="text-decoration-none" href="<?php echo $level?>index.php"">Trang Chủ</a></li>
                    <li><a class="text-decoration-none" href="<?php echo $level.pages_path?>ThongTin.php"">Thông Tin</a></li>
                    <li><a class="text-decoration-none" href="<?php echo $level.pages_path?>MuaHang.php"">Mua Hàng</a></li>
                    <li><a class="text-decoration-none" href="<?php echo $level.pages_path?>LienHe.php"">Liên Hệ</a></li>
                </ul>
            </div>

        </div>

        <div class="row text-light mb-4">
            <div class="col-12 mb-3">
                <div class="w-100 my-3 border-top border-light"></div>
            </div>
            <div class="col-12" style="margin-left: 40%;">
                <ul class="list-inline text-left footer-icons">
                    <li class="list-inline-item border border-light rounded-circle text-center">
                        <a class="text-light text-decoration-none" target="_blank" href="http://facebook.com/"><i
                                class="fab fa-facebook-f fa-lg fa-fw"></i></a>
                    </li>
                    <li class="list-inline-item border border-light rounded-circle text-center">
                        <a class="text-light text-decoration-none" target="_blank" href="https://www.instagram.com/"><i
                                class="fab fa-instagram fa-lg fa-fw"></i></a>
                    </li>
                    <li class="list-inline-item border border-light rounded-circle text-center">
                        <a class="text-light text-decoration-none" target="_blank" href="https://twitter.com/"><i
                                class="fab fa-twitter fa-lg fa-fw"></i></a>
                    </li>
                    <li class="list-inline-item border border-light rounded-circle text-center">
                        <a class="text-light text-decoration-none" target="_blank" href="https://www.linkedin.com/"><i
                                class="fab fa-linkedin fa-lg fa-fw"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="w-100 bg-black py-3">
        <div class="container">
            <div class="row pt-2">
                <div class="col-12" style="margin-left: 34%;">
                    <p class="text-left text-light">
                        Copyright &copy; 2021 OneWeek
                        | Designed by <a rel="sponsored" href="#" target="_self">LaiKhai</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

</footer>
<!-- End Footer -->

<!-- Start Script -->
<script src="<?php echo $level.js_path."jquery-1.11.0.min.js";?>"></script>
<script src="<?php echo $level.js_path."jquery-migrate-1.2.1.min.js";?>"></script>
<script src="<?php echo $level.js_path."bootstrap.bundle.min.js";?>"></script>
<script src="<?php echo $level.js_path."templatemo.js";?>"></script>
<script src="<?php echo $level.js_path."custom.js";?>"></script>
<!-- End Script -->

<!-- Start Slider Script -->
<script src="<?php echo $level.js_path."slick.min.js";?>"></script>
<script>
$('#carousel-related-product').slick({
    infinite: true,
    arrows: false,
    slidesToShow: 4,
    slidesToScroll: 3,
    dots: true,
    responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 3
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 3
            }
        }
    ]
});
</script>
<!-- End Slider Script -->

<!-- cart -->

<!--? Search model Begin -->
<div class="search-model-box">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-btn">+</div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Searching key.....">
        </form>
    </div>
</div>
<!-- Search model end -->

<!-- JS here -->

<script src="<?php echo $level.js_path_2."vendor/modernizr-3.5.0.min.js";?>"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="<?php echo $level.js_path_2."vendor/jquery-1.12.4.min.js";?>"></script>
<script src="<?php echo $level.js_path_2."popper.min.js";?>"></script>
<script src="<?php echo $level.js_path_2."bootstrap.min.js";?>"></script>
<!-- Jquery Mobile Menu -->
<script src="<?php echo $level.js_path_2."jquery.slicknav.min.js";?>"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="<?php echo $level.js_path_2."owl.carousel.min.js";?>"></script>
<script src="<?php echo $level.js_path_2."slick.min.js";?>"></script>

<!-- One Page, Animated-HeadLin -->
<script src="<?php echo $level.js_path_2."wow.min.js";?>"></script>
<script src="<?php echo $level.js_path_2."animated.headline.js";?>"></script>

<!-- Scrollup, nice-select, sticky -->
<script src="<?php echo $level.js_path_2."jquery.scrollUp.min.js";?>"></script>
<script src="<?php echo $level.js_path_2."jquery.nice-select.min.js";?>"></script>
<script src="<?php echo $level.js_path_2."jquery.sticky.js";?>"></script>
<script src="<?php echo $level.js_path_2."jquery.magnific-popup.js";?>"></script>

<!-- contact js -->
<script src="<?php echo $level.js_path_2."contact.js";?>"></script>
<script src="<?php echo $level.js_path_2."jquery.form.js";?>"></script>
<script src="<?php echo $level.js_path_2."jquery.validate.min.js";?>"></script>
<script src="<?php echo $level.js_path_2."mail-script.js";?>"></script>
<script src="<?php echo $level.js_path_2."jquery.ajaxchimp.min.js";?>"></script>

<!-- Jquery Plugins, main Jquery -->
<script src="<?php echo $level.js_path_2."plugins.js";?>"></script>
<script src="<?php echo $level.js_path_2."main.js";?>"></script>


</body>

</html>