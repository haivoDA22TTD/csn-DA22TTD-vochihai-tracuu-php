<?php
session_start();
$server = 'localhost';
$user = 'root';
$pass = '';
$database = 'data';
    $conn = new mysqli($server, $user, $pass, $database);
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $tentaikhoan = $_POST['tentaikhoan'];
            $matkhau = md5($_POST['matkhau']);
            $sql = "SELECT * FROM taikhoan WHERE tentaikhoan = ? AND matkhau = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ss", $tentaikhoan, $matkhau);
            $stmt->execute();
            $result = $stmt->get_result();
            if ($result->num_rows > 0) {
                $user = $result->fetch_assoc();
                $_SESSION['tentaikhoan'] = $tentaikhoan;
                $_SESSION['quyen'] = $user['quyen']; 
        
                if ($user['quyen'] === 'admin') {
                    header('Location: ql_khuvuc.php'); 
                } else {
                    header('Location: nguoidung.php'); 
                }
                exit();
            } else {
                echo 'Tài khoản hoặc mật khẩu không đúng';
            }
        
            $stmt->close();
        }
        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập</title>
    <link rel="stylesheet" href="dangnhap.css">
</head>
<body>
    <div class="box">
        <form action="" method="post">
            <h3 class="title">Đăng Nhập</h3>
            <input class="input" type="text" name="tentaikhoan" required placeholder="Tài khoản">
            <input class="input" type="password" name="matkhau" required placeholder="Mật khẩu">
            <input class="btn" type="submit" value="Đăng Nhập">
        </form>
    </div>
</body>
</html>
