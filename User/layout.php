<?php
    require_once("config.php");
    require_once($level.head_path."head_index.php");
    require_once($level.head_path."header.php");
    if($isIndex==true)
    {
        require_once($level.body_path."slideshow_index.php");
        require_once($level.body_path."sanphamkhac_index.php");
        require_once($level.body_path."sansale_index.php");
        require_once($level.footer_path."foot_index.php");
    }
    if($isMuaHang==true)
    {
        require_once($level.body_path."danhsachsanpham.php");   
        require_once($level.body_path."thuonghieu.php");
        require_once($level.footer_path."foot_index.php");
    }
    if($isChiTietSanPham==true)
    {
        require_once($level.body_path."content_chitietsanpham.php");
        require_once($level.body_path."article_chitietsanpham.php");
        require_once($level.footer_path."foot_chitietsanpham.php");
    }
    

?>