<?php
    // $level="../";
    // require_once($level."config.php");
    // require_once($level.lib_path."db.php");
    if(isset($_POST['taikhoan']))
    {
        $taikhoan=$_POST['taikhoan'];
        $matkhau=$_POST['matkhau'];
        $query_dangnhap=DP::run_query("SELECT COUNT(*) FROM `client` WHERE cliUser=?",[$taikhoan],2);
        $dangnhap=DP::run_query("SELECT * FROM `client` WHERE cliUser=?",[$taikhoan],2);

        foreach($query_dangnhap as $key)
        {
            if($key['0']>'0')
            {
                if (password_verify($matkhau, $dangnhap[0]['cliPass'])) {
                    $_SESSION['user']=$dangnhap;
                    echo "<script>";
                    echo "window.location='../index.php'";
                    echo "</script>";
                }
                else {
                    echo "<script>";
                    echo "alert('Sai mật khẩu!');";
                    echo "window.location='../pages/Dangnhap.php'";
                    echo "</script>";
                }
            }
            else if($key['0']=='0')
            {
                    echo "<script>";
                    echo "alert('Tài Khoản Không Tồn Tại !');";
                    echo "window.location='../pages/Dangnhap.php'";
                    echo "</script>";
            }
        }
    }

?>