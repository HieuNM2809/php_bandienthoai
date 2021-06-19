<?php
    // TH1:Chưa có giỏ hàng thì thêm giỏ
    //kiểm tra id có tồn tại không (sản phẩm có tồn tại không)
    $id=$_GET['id'];
    $query_giohang=DP::run_query("SELECT `prodID`, `prodName`, `prodPrice`, `prodSL`, `prodInit`, `prodReleaseYear`, `prodDescription`, `prodImg`, `prodStatus`, `provID`, `catID` FROM `product` WHERE prodID=?",[$id],2);
    $prodID=$query_giohang[0]['prodID'];
    $prodName=$query_giohang[0]['prodName'];
    $prodPrice=$query_giohang[0]['prodPrice'];
    $prodImg=$query_giohang[0]['prodImg'];
    
    if(isset($_SESSION['cart'][$id]))
    {
	//tang so luong cua mot cuon sach da co trong gio hang
	    $_SESSION['cart'][$id]['soluong']=
	    $_SESSION['cart'][$id]['soluong']+1;
    }
    else
    {
	//them mot sach moi vao gio hang
	$_SESSION['cart'][$id]
	=array(
        'id'=>$prodID,
        'name'=>$prodName,
        'img'=>$prodImg,
        'dongia'=>$prodPrice,
        'soluong'=>1
    );
    }
    // Tạo Mảng hai chiều để lưu nhiều sản phẩm được chọn
    // echo "<pre>";
    // var_dump($_SESSION['cart']);
    // Thêm sản phẩm
    // cập nhật giỏ hàng
    // xáo giỏ hàng
?>