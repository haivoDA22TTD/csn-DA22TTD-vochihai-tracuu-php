<?php
session_start();
$server = 'localhost';
$user = 'root';
$pass = '';
$database = 'data';
$conn = new mysqli($server, $user, $pass, $database);
if($conn)
    {
        mysqli_query($conn, "SET NAMES 'utf8' ");
        echo '';
    }
    else{
        echo 'ko ket noi';
    }
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tentaikhoan = $_POST['tentaikhoan'];
    $matkhau = $_POST['matkhau'];

    // Kiểm tra thông tin đăng nhập
    $stmt = $conn->prepare("SELECT * FROM taikhoan WHERE tentaikhoan = ?");
    $stmt->bind_param("s", $tentaikhoan);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if ($matkhau === $user['matkhau']) { // So sánh mật khẩu
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['tentaikhoan'] = $user['tentaikhoan'];
            header("Location: dashboard.php");
            exit();
        } else {
            echo "Sai mật khẩu.";
        }
    } else {
        echo "Người dùng không tồn tại.";
    }
}
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="./login.css">
    </head>
    <body>
    <div class="container">
<form method="post">
    <p class="title">Đăng Nhập</p>
    <input class="input" type="text" name="tentaikhoan" required placeholder="Tên tài khoản">
    <input class="input" type="password" name="matkhau" required placeholder="Mật khẩu">
    <button class="btn" type="submit">Đăng nhập</button>
</form>
</div>
    </body>
    </html>
