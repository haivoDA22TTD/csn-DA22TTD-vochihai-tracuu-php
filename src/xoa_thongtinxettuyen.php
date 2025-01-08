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
            $sql = "DELETE FROM thongtinxettuyen WHERE matruong = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("s", $id);
            $stmt->execute();
                header('location:ql_thongtinxettuyen.php');
                exit();
        }
    $stmt->close();
    $conn->close();
?>