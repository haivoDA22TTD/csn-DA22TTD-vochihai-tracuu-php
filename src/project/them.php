<?php
    session_start();
    if( !isset($_SESSION['quyen']) || $_SESSION ['quyen']!== 'admin'){
        header('location:dangnhap.php');
        exit();
    }
        $server = 'localhost';
        $user = 'root';
        $pass = '';
        $database = 'data';
        $conn = new mysqli($server, $user, $pass, $database);
            if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_user'])){
                $addUser = $_POST['addUser'];
                $addPass = md5($_POST['addPass']);
                $quyen = $_POST['quyen'];
            $sql = "INSERT INTO taikhoan (tentaikhoan, matkhau, quyen) VALUES(?, ?, ?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("sss", $addUser, $addPass, $quyen);
                $stmt->execute();
                $stmt->close();
                    header('location:taikhoan.php');
                    exit();
            }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="them.css">
</head>
<body>
    <div class="box">
    <form action=""method="post">
    <h1 class="title">Thêm</h1>
        <input class ="input" type="text" name="addUser" placeholder="nhap tai khoan">
        <input class="input" type="password" name="addPass" placeholder="nhap mat khau">
        <select class="input" name="quyen">
            <option value="user">user</option>
            <option value="admin">admin</option>
        </select>
        <input class="btn" type="submit" name="add_user" value="Thêm">
    </form>
    </div>
</body>
</html>