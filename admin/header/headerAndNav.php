<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="<?php echo $level?>index.php">
                        <!-- Logo icon -->
                        <b class="logo-icon p-l-10">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="<?php echo $level.images_Part ?>OneWeek1.png" style="width: 47px;" alt="homepage" class="light-logo" />
                           
                        </b>
                        <!--End Logo icon -->
                         <!-- Logo text -->
                        <span class="logo-text">
                             <!-- dark Logo text -->
                             <img src="<?php echo $level.images_Part ?>admin1.png" alt="homepage" class="light-logo" />
                            
                        </span>
                        <!-- Logo icon -->
                        <!-- <b class="logo-icon"> -->
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <!-- <img src="assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->
                            
                        <!-- </b> -->
                        <!--End Logo icon -->
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                        <!-- ============================================================== -->
                        <!-- create new -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             <span class="d-none d-md-block">Tạo Mới <i class="fa fa-angle-down"></i></span>
                             <span class="d-block d-md-none"><i class="fa fa-plus"></i></span>   
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="<?php echo $level.pages_Part?>CreateProvided.php">Thêm Nhà Cung Cấp</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?php echo $level.pages_Part?>CreateStaff.php">Thêm Nhân Viên</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?php echo $level.pages_Part?>CreateStaff.php">Thêm Sản Phẩm</a>
                  
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li  class="nav-item search-box d-none"> <a class="nav-link waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search position-absolute">
                                <input type="text" class="form-control" placeholder="Tìm kiếm và nhấn Enter"> <a class="srh-btn"><i class="ti-close"></i></a>
                            </form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->
                        <style>
                            .noti{
                                position: relative;
                                top: -39px;
                                right: -20px;
                            }
                        </style>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href=""
                             data-toggle="dropdown" aria-haspopup="true" 
                             aria-expanded="false"> <i class="mdi mdi-bell font-24"></i>
                             <h4 class="noti" id="noti">
                                 <?php if($countNew == 0 ) echo ""; else echo $countNew;  ?>
                             </h4>
                            </a>
                           
                             <div style="left:-400px" class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">
                                   <table class="table table-striped">
                                       <thead>
                                            <tr>
                                                <th>Tên</th>
                                                <th>Số lượng</th>
                                                <th>Xác nhận</th>
                                                <th>Hủy</th>
                                            </tr>
                                        </thead>
                                        <tbody id="lstOrderNew">
                                            <?php foreach( $lstOrderNew as $value){
                                            ?>
                                                <tr>
                                                    <td><?php echo $value['prodName'] ?></td>
                                                    <td><?php echo $value['infoOrderSL'] ?></td>
                                                    <td><button onclick="xacNhanHoaDon('<?php  echo $value['ordID'] ?>');" type="button" class="btn btn-primary">Xác nhận</button></td>
                                                    <td><button onclick="huyHoaDon('<?php  echo $value['ordID'] ?>');" type="button" class="btn btn-danger">Hủy</button></td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                    
                                    <script>
                                        function xacNhanHoaDon(ordID) {
                                            // trừ ở thông báo xuống 1
                                            document.getElementById("noti").innerHTML= Number($('#noti').text() )-1;
                                            const xhttp = new XMLHttpRequest();
                                            xhttp.onreadystatechange = function() {
                                                if (this.readyState == 4 && this.status == 200) {
                                                document.getElementById("lstOrderNew").innerHTML =
                                                this.responseText;
                                                }
                                            };
                                            var url = "../api/xacNhanDonHang.php?ordID=" + ordID;
                                            xhttp.open("GET",url);
                                            xhttp.send();
                                        }
                                        function huyHoaDon(ordID) {

                                            document.getElementById("noti").innerHTML= Number($('#noti').text() )-1;
                                            const xhttp = new XMLHttpRequest();
                                            xhttp.onreadystatechange = function() {
                                                if (this.readyState == 4 && this.status == 200) {
                                                document.getElementById("demo").innerHTML =
                                                this.responseText;
                                                }
                                            };
                                            var url = "../api/huyDonHang.php?ordID=" + ordID;
                                            xhttp.open("GET",url);
                                            xhttp.send();
                                        }
                                            
                                    </script>
                                   
                                </a>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Comment -->
                        <!-- ============================================================== -->
                       
                 
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <img src="<?php echo $level.images_Part ?>users/<?php echo  $staInfoLogin[0]['staImg'] ?>" alt="user" class="rounded-circle"    style=" height: 42px; width: 49px;">
                              </a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user m-r-5 m-l-5"></i><?php echo  $staInfoLogin[0]['staName'] ?></a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?php echo $level.pages_Part."EditStaff.php?id=".$staInfoLogin[0]['staID']."&id_Login=".$staInfoLogin[0]['LoginID'] ?>"><i class="ti-settings m-r-5 m-l-5"></i>Thiết lập tài khoản</a>
                                <div class="dropdown-divider"></div> 
                                <a class="dropdown-item" href="<?php echo $level.compPart."LogOut.php"?>" ><i class="fa fa-power-off m-r-5 m-l-5"></i> Đăng xuất</a>
                                <!-- <div class="dropdown-divider"></div>
                                <div class="p-l-30 p-10"><a href="javascript:void(0)" class="btn btn-sm btn-success btn-rounded">Xem hồ sơ</a></div> -->
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="p-t-30">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo $level?>index.php" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Bảng điều khiển</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo $level.pages_Part?>charts.php" aria-expanded="false"><i class="mdi mdi-chart-bar"></i><span class="hide-menu">Thống kê</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-face"></i><span class="hide-menu">Nhân viên </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="<?php echo $level.pages_Part?>CreateStaff.php" class="sidebar-link"><i class="fas fa-user-plus"></i><span class="hide-menu"> Thêm nhân viên </span></a></li>
                                <li class="sidebar-item"><a href="<?php echo $level.pages_Part?>ListStaff.php" class="sidebar-link"><i class="far fa-list-alt"></i><span class="hide-menu"> Danh sách nhân viên </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-user"></i><span class="hide-menu">Khách hàng</span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="<?php echo $level.pages_Part?>DetailClient.php" class="sidebar-link"><i class="fas fa-info"></i><span class="hide-menu"> Chi tiết khách hàng</span></a></li>
                                <li class="sidebar-item"><a href="<?php echo $level.pages_Part?>ListClient.php" class="sidebar-link"><i class="far fa-list-alt"></i><span class="hide-menu"> Danh sách khách hàng</span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-mobile-alt"></i><span class="hide-menu">Nhà cung cấp</span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="<?php echo $level.pages_Part?>CreateProvided.php" class="sidebar-link"><i class="fas fa-user-plus"></i><span class="hide-menu">Thêm nhà cung cấp</span></a></li>
                                <li class="sidebar-item"><a href="<?php echo $level.pages_Part?>ListProvided.php" class="sidebar-link"><i class="far fa-list-alt"></i><span class="hide-menu"> Danh sách nhà cung cấp</span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo $level.pages_Part?>ListFilm.php" aria-expanded="false"><i class="fas fa-clipboard-list"></i><span class="hide-menu">Danh sách điện thoại</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo $level.pages_Part?>Order.php" aria-expanded="false"><i class="mdi mdi-relative-scale"></i><span class="hide-menu">Đơn nhập</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Đơn mua</span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="<?php echo $level.pages_Part?>ListPurchaseMenu.php" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu">Tất cả đơn mua</span></a></li>
                                <li class="sidebar-item"><a href="<?php echo $level.pages_Part?>DetailPurchaseMenu.php" class="sidebar-link"><i class="fas fa-info-circle"></i><span class="hide-menu">Chi tiết đơn mua</span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-account-key"></i><span class="hide-menu">Tài khoản</span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="<?php echo $level.compPart."LogOut.php"?>" class="sidebar-link"><i class="mdi mdi-all-inclusive"></i><span class="hide-menu"> Đăng xuất </span></a></li>
                                <!-- <li class="sidebar-item"><a href="<?php echo $level.pages_Part?>authentication-register.php" class="sidebar-link"><i class="mdi mdi-all-inclusive"></i><span class="hide-menu"> Đăng ký </span></a></li> -->
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->