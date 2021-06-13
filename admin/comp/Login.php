<?php
    session_start();
    $level ="../";
    require_once ($level."config.php");
    require_once ($level."lib/db.php");

    // Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
    if (isset($_POST["sub_Login"])) {

        // lấy thông tin người dùng
        $username = $_POST["LoginUserName"];
        $password = $_POST["LoginPassword"];

        //làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
        //mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
        $username = strip_tags($username);
        $username = addslashes($username);
        $password = strip_tags($password);
        $password = addslashes($password);

        $sql = "select * from staff_login where LoginUserName = ? and LoginPassword = ? and LoginStatus = 1";
        $params =[];
        array_push($params, $username, $password );
        $result =   DP::run_query($sql, $params , 2);
        if ($result == false) {
            
            echo '<script language="javascript">';
            echo 'alert("Tên đăng nhập hoặc mật khẩu không đúng !");';
            echo ' window.location="../pages/authentication-login.php";';
            echo '</script>';
        }else{

            //tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
            $_SESSION['username'] = $username;

            // Thực thi hành động sau khi lưu thông tin vào session
            // ở đây mình tiến hành chuyển hướng trang web tới một trang gọi là index.php
            header('Location: ../index.php');
        }
    }
?>