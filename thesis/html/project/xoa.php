<?php
    session_start();
    if( !isset($_SESSION['quyen']) || $_SESSION['quyen'] !== 'admin'){
        header('location:dangnhap.php');
        exit();
    }
    $server = 'localhost';
    $user = 'root';
    $pass = '';
    $databse = 'data';
    $conn = new mysqli($server, $user, $pass, $databse);
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $sql = "DELETE FROM taikhoan WHERE id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("i", $id);
            $stmt->execute();
                header('location:taikhoan.php');
                exit();
        }
    $stmt->close();
    $conn->close();
?>