<?php

    $err=[];
    if(isset($_POST['submit']))
    {
            $hoten=$_POST['hoten'];
            $diachi=$_POST['diachi'];
            $thanhpho=$_POST['thanhpho'];
            $sdt=$_POST['sdt'];
            $taikhoan=$_POST['taikhoan'];
            $matkhau=$_POST['matkhau'];
            $nhaplaimatkhau=$_POST['nhaplaimatkhau'];

            if(empty($hoten))
            {
                $err['hoten']='Bạn Chưa Nhập Họ Tên !';
            }
            if(empty($diachi))
            {
                $err['diachi']='Bạn chưa nhập địa chỉ !';
            }
            if(empty($thanhpho))
            {
                $err['thanhpho']='Bạn chưa nhập thành phố !';
            }
            if(empty($sdt))
            {
                $err['sdt']='Bạn chưa nhập số điện thoại !';
            }
            if(empty($taikhoan))
            {
                $err['taikhoan']='Bạn Chưa Nhập Tên Tài Khoản !';
            }
            if(empty($matkhau))
            {
                $err['matkhau']='Bạn Chưa Nhập Mật Khẩu !';
            }
            if(empty($nhaplaimatkhau))
            {
                $err['nhaplaimatkhau']='Bạn Chưa Nhập lại Mật Khẩu !';
            }
            if($matkhau!=$nhaplaimatkhau)
            {
                $err['nhaplaimatkhau']='Mật Khẩu không trùng khớp !';
            }
            if(empty($err))
            {
                $query_dangnhap=DP::run_query("SELECT COUNT(*) FROM `client` WHERE cliUser=?",[$taikhoan],2);
                foreach($query_dangnhap as $key)
                {
                    if($key['0']>'0')
                    {
                        echo "<script>";
                        echo "alert('Tài Khoản Đã Tồn Tại !');";
                        echo "window.location='../pages/DangKy.php'";
                        echo "</script>";
                    }
                    else if($key['0']=='0')
                    {
                        $matkhau=password_hash($matkhau,PASSWORD_DEFAULT);
                            $query_dangki=DP::run_query("INSERT INTO `client`( `cliName`, `cliAddress`, `cliCountry`, `cliPhone`, `cliStatus`, `cliUser`, `cliPass`)
                            VALUES (?,?,?,?,'1',?,?)",[$hoten,$diachi,$thanhpho,$sdt,$taikhoan,$matkhau],1);
                        if($query_dangki)
                        {
                                echo "<script>";
                                echo "alert('Đăng Ký Thành Công !');";
                                echo "window.location='../pages/DangKy.php'";
                                echo "</script>";
                        }
                        else
                        {
                                echo "<script>";
                                echo "alert('Đăng Ký Thất Bại !');";
                                echo "window.location='../pages/DangKy.php'";
                                echo "</script>";
                        }
                    }
                }
                
                
            }
            
    }
    
        
?>