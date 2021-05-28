<?php
    //================================================
    //==========Start  Ghi chú: header 
    //================================================
     require_once ($level."config.php");
     require_once ($level.header_Part."link.php");
     require_once ($level.header_Part."headerAndNav.php");
     require_once ("lib/db.php");
     require_once ("comp/proccess.php");

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
        require_once ($level.createStaff_Part."breadcrumb.php");
        require_once ($level.createStaff_Part."nhapThongTin.php");
     }else if($IslistStaff ==true){
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
        require_once ($level.detailPurchaseMenu_Part."breadcrumb.php");
        require_once ($level.detailPurchaseMenu_Part."thongTinDonMua.php");
     }else if($IsEditStaff ==true){
      require_once ($level.editStaffPart."breadcrumb.php");
      require_once ($level.editStaffPart."nhapThongTin.php");
     }
     else if($IsCreateProvided == true){
         require_once ($level.CreateProvidedPart."breadcrumb.php");
         require_once ($level.CreateProvidedPart."nhapThongTin.php");
      }else if($IsListProvided ==true){
         require_once ($level.ListProvidedPart."breadcrumb.php");
         require_once ($level.ListProvidedPart."danhSach.php");
      }else if($IsEditProvided ==true){
         require_once ($level.EditProvidedPart."breadcrumb.php");
         require_once ($level.EditProvidedPart."nhapThongTin.php");
      }
    


     //================================================
     //==========Start  Ghi chú: footer
     //================================================
     require_once ($level.footer_Part."footer.php");

?>