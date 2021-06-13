<?php
    session_start();
    unset($_SESSION['username']);
    header("location:../pages/authentication-login.php");
?>