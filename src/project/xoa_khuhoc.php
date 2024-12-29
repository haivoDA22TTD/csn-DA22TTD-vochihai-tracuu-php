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
            $sql = "DELETE FROM khuhoc WHERE makhuhoc = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("s", $id);
            $stmt->execute();
                header('location:ql_khuhoc.php');
                exit();
        }
    $stmt->close();
    $conn->close();
?>