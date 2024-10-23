<?php
    session_start();
    if( !isset($_SESSION['tentaikhoan'])){
        header('location:login.php');
        exit();
    }
    echo 'xinchao' . $_SESSION['tentaikhoan'] . '<br>';
    echo '<a href="logout.php">Dang Xuat</a>';
?>