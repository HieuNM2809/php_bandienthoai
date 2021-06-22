<?php
    $user=(isset($_SESSION['user']))?$user=$_SESSION['user']:[];
    //var_dump($user);
    $action=(isset($_POST['action']))?$_POST['action']:[];
    $event=(isset($_POST['event']))?$_POST['event']:[];
    if($user==[])
    {
        echo "<h1> ERROR !! </h1>";
    }
      
    if(isset($_POST['submit']))
    {
        $hoten=$_POST['hoten'];
        $diachi=$_POST['diachi'];
        $thanhpho=$_POST['thanhpho'];
        $sdt=$_POST['sdt'];
        $taikhoan=$user[0]['cliUser'];
        
        if($action=='update')
        {
            $user[0]['cliName']=$hoten;
            $user[0]['cliAddress']=$diachi;
            $user[0]['cliCountry']=$thanhpho;
            $user[0]['cliPhone']=$sdt;

            $query_update=DP::run_query("UPDATE `client` SET `cliName`=?,`cliAddress`=?,`cliCountry`=?
             ,`cliPhone`=? WHERE `cliUser`=?",[$hoten,$diachi,$thanhpho,$sdt,$taikhoan],1);
            if($query_update)
             {
                 echo "<script>";
                 echo "alert('Cập Nhật Thành Công !');";
                 echo "</script>";
             }
             else
             {
                     echo "<script>";
                     echo "alert('Cập Nhật Thất Bại !');";
                     echo "</script>";  
             }
        }
    }
    
    // $name=$user[0]['cliName'];
    // $address= $user[0]['cliAddress'];
    // $country=$user[0]['cliCountry'];
    // $phone=$user[0]['cliPhone'];
    // $taikhoan=$user[0]['cliUser'];

    
    // if(isset($_POST['submit']))
    // {
    //     if($event=='save')
    //     {
    //         $hoten=$_POST['hoten'];
    //         $diachi=$_POST['diachi'];
    //         $thanhpho=$_POST['thanhpho'];
    //         $sdt=$_POST['sdt'];
    //         $taikhoan=$user[0]['cliUser'];
            
    //         $query_update=DP::run_query("UPDATE `client` SET `cliName`=?,`cliAddress`=?,`cliCountry`=?
    //         ,`cliPhone`=? WHERE `cliUser`=?",[$hoten,$diachi,$thanhpho,$sdt,$taikhoan],1);
    //         if($query_update)
    //         {
    //             echo "<script>";
    //             echo "alert('Lưu Thành Công !');";
    //             echo "window.location='../pages/thongtintaikhoan.php'";
    //             echo "</script>";
    //         }
    //         else
    //         {
    //                 echo "<script>";
    //                 echo "alert('Lưu Thất Bại !');";
    //                 echo "window.location='../pages/thongtintaikhoan.php'";
    //                 echo "</script>";  
    //         }
    //     }  
    // }
      
    
?>