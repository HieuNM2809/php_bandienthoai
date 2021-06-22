<?php
    $level="../";
    require_once($level."config.php");
    require_once($level.lib_path."db.php");
    session_start();
    session_destroy();
    header("location: /PHP_OneWeek/User/pages/DangNhap.php");
    exit();
?>