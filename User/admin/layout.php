<?php
    //================================================
    //==========Start  Ghi chú: header 
    //================================================
     session_start();
     if (!isset($_SESSION['username'])) {
        $str = $level."pages/authentication-login.php";
        header('Location:'.$str);
     }
     require_once ($level."config.php");
     require_once ("lib/db.php");
     require_once ("comp/proccess.php");
     require_once ("comp/Login_Data.php");
     
     require_once ($level.header_Part."link.php");
     require_once ($level.header_Part."headerAndNav.php");
     

     //================================================
     //==========Start  Ghi chú: container
     //================================================
     if($Isindex == true){
         require_once ($level.index_Part."bangDieuKhien.php");
         require_once ($level.index_Part."toggle.php");
     }else if($Ischarts ==true){
        require_once ($level.charts_Part."ten.php");
        require_once ($level.charts_Part."danhSach.php");
     }else if($IscreateStaff ==true){

        Position($staInfoLogin[0]['staPosition'],$level);

        require_once ($level.createStaff_Part."breadcrumb.php");
        require_once ($level.createStaff_Part."nhapThongTin.php");
     }else if($IslistStaff ==true){

        Position($staInfoLogin[0]['staPosition'],$level);

        require_once ($level.listStaff_Part."breadcrumb.php");
        require_once ($level.listStaff_Part."danhSach.php");
     }else if($IsdetailClient ==true){
        require_once ($level.detailClient_Part."breadcrumb.php");
        require_once ($level.detailClient_Part."thongTinKhachHang.php");
     }else if($IslistClient ==true){
        require_once ($level.listClient_Part."breadcrumb.php");
        require_once ($level.listClient_Part."danhSach.php");
     }else if($IslistFilm ==true){
        require_once ($level.listFilm_Part."breadcrumb.php");
        require_once ($level.listFilm_Part."listFilm.php");
     }else if($Isorder ==true){
        require_once ($level.order_Part."breadcrumb.php");
        require_once ($level.order_Part."nhapThongTin.php");
     }else if($IslistPurchaseMenu ==true){
        require_once ($level.listPurchaseMenu_Part."breadcrumb.php");
        require_once ($level.listPurchaseMenu_Part."danhSach.php");
     }else if($IsdetailPurchaseMenu ==true){

         if( !isset($_GET['cliID']) || !isset($_GET['ordID']) || !isset($_GET['infoOrderID']) ) {
            
            echo '<script language="javascript">';
            echo 'alert("Hãy chọn một hóa đơn để in");';
            echo ' window.location="ListPurchaseMenu.php";';
            echo '</script>';
         }

        require_once ($level.detailPurchaseMenu_Part."breadcrumb.php");
        require_once ($level.detailPurchaseMenu_Part."thongTinDonMua.php");
     }else if($IsEditStaff ==true){
      require_once ($level.editStaffPart."breadcrumb.php");
      require_once ($level.editStaffPart."nhapThongTin.php");
     }
     else if($IsCreateProvided == true){

         Position($staInfoLogin[0]['staPosition'],$level);

         require_once ($level.CreateProvidedPart."breadcrumb.php");
         require_once ($level.CreateProvidedPart."nhapThongTin.php");
      }else if($IsListProvided ==true){

         Position($staInfoLogin[0]['staPosition'],$level);

         require_once ($level.ListProvidedPart."breadcrumb.php");
         require_once ($level.ListProvidedPart."danhSach.php");
      }else if($IsEditProvided ==true){
         require_once ($level.EditProvidedPart."breadcrumb.php");
         require_once ($level.EditProvidedPart."nhapThongTin.php");
      }else if($IsEditClient ==true){
         require_once ($level.EditClientPart."breadcrumb.php");
         require_once ($level.EditClientPart."thongTinKhachHang.php");
      }else if($IsEditOrder ==true){
         require_once ($level.EditOrderPart."breadcrumb.php");
         require_once ($level.EditOrderPart."nhapThongTin.php");
      }
    


     //================================================
     //==========Start  Ghi chú: footer
     //================================================
     require_once ($level.footer_Part."footer.php");

     // Phan quyen
     function Position($pos,$level){
         if( $pos != "GD"){
            $part = "$level"."index.php";
            echo "<script>";
            echo "alert('Bạn không đủ quyền truy cập trang này');";
            echo " window.location='$part'";
            echo '</script>';
         }
     }
?>