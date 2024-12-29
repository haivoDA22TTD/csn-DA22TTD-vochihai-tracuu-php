<?php
session_start();
if (!isset($_SESSION['tentaikhoan'])) {
    header('location:dangnhap.php');
    exit();
}
echo 'Xin chào, ' . $_SESSION['tentaikhoan'] . '<br>';
echo '<a href="dangxuat.php">Đăng Xuất</a>';
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang người dùng</title>
    <style>
        form{
    background: #000;
    text-align: center;
    font-size: 20px;
    color: wheat;
    flex-direction: column;
    border-radius: 20px;
    width: 400px;
    height: 500px;
}
.title{
    color: wheat;
    font-size: 25px;
    margin: 2rem;
}
.input{
    background: #fff;
    width: 20rem;
    color: #000;
    margin: 1rem;
    padding: 1rem;
}

.btn{
    width: 20rem;
    height: 3rem;
    margin-top: 4rem;
    background: wheat;
    color: #000;
    font-size: 25px;
}
.box{
    justify-content: center;
    align-items: center;
    display: flex;
    min-height: 100vh;
}
    </style>
</head>
<body>
<div class="box">
<form action="tim_kiem_truong.php" method="POST">
    <h1 class="title">Tra Cứu</h1>
    <input class="input" type="text" name="matruong" placeholder="Nhập mã trường">
    <input class="input" type="text" name="tentruong" placeholder="Nhập Tên Trường">
    <input class="input" type="text" name="nganhdaotao" placeholder="Nhập Ngành Đào Tạo">
    <input class="btn" type="submit" value="Tìm kiếm">
</form>
</div>
</body>
</html>